<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{


    public function index()
    {
        $data = array();
        $data['all_featured_products'] = $this->web_model->get_all_featured_product();
        $data['all_new_products'] = $this->web_model->get_all_new_product();
        $this->load->view('web/inc/header');
        $this->load->view('web/inc/slider');
        $this->load->view('web/pages/home', $data);
        $this->load->view('web/inc/footer');
    }

    public function contact()
    {
        $data = array();
        $this->load->view('web/inc/header');
        $this->load->view('web/pages/contact');
        $this->load->view('web/inc/footer');
    }

    public function cart()
    {
        $data = array();
        $data['cart_contents'] = $this->cart->contents();
        $this->load->view('web/inc/header');
        $this->load->view('web/pages/cart', $data);
        $this->load->view('web/inc/footer');
    }

    public function product()
    {
        $data = array();
        $data['get_all_product'] = $this->web_model->get_all_product();
        $this->load->view('web/inc/header');
        $this->load->view('web/pages/product', $data);
        $this->load->view('web/inc/footer');
    }

    public function single($id)
    {
        $data = array();
        $data['get_single_product'] = $this->web_model->get_single_product($id);
        $data['get_all_category'] = $this->web_model->get_all_category();
        $this->load->view('web/inc/header');
        $this->load->view('web/pages/single', $data);
        $this->load->view('web/inc/footer');
    }

    public function error()
    {
        $data = array();
        $this->load->view('web/inc/header');
        $this->load->view('web/pages/error');
        $this->load->view('web/inc/footer');
    }

    public function category_post($id)
    {
        $data = array();
        $data['get_all_product'] = $this->web_model->get_all_product_by_cat($id);
        $this->load->view('web/inc/header');
        $this->load->view('web/pages/product', $data);
        $this->load->view('web/inc/footer');
    }

    public function save_cart()
    {
        $data = array();
        $product_id = $this->input->post('product_id');
        $results = $this->web_model->get_product_by_id($product_id);

        $data['id'] = $results->product_id;
        $data['name'] = $results->product_title;
        $data['price'] = $results->product_price;
        $data['qty'] = $this->input->post('qty');
        $data['options'] = array('product_image' => $results->product_image);

        $this->cart->insert($data);
        redirect('cart');
    }

    public function update_cart()
    {
        $data = array();
        $data['qty'] = $this->input->post('qty');
        $data['rowid'] = $this->input->post('rowid');

        $this->cart->update($data);
        redirect('cart');
    }

    public function remove_cart()
    {

        $data = $this->input->post('rowid');
        $this->cart->remove($data);
        redirect('cart');
    }

    public function register_success()
    {
        $customer_name = $this->session->flashdata('customer_name');
        if (!$customer_name) {
            redirect('customer/register');
        }
        $data = array();
        $this->load->view('web/inc/header');
        $this->load->view('web/pages/register_success');
        $this->load->view('web/inc/footer');
    }

    public function user_form()
    {
        $data = array();
        $this->load->view('web/inc/header');
        $this->load->view('web/pages/user_form');
        $this->load->view('web/inc/footer');
    }

    public function customer_register()
    {
        $data = array();
        $this->load->view('web/inc/header');
        $this->load->view('web/pages/customer_register');
        $this->load->view('web/inc/footer');
    }

    public function customer_login()
    {
        $data = array();
        $this->load->view('web/inc/header');
        $this->load->view('web/pages/customer_login');
        $this->load->view('web/inc/footer');
    }

    public function customer_save()
    {
        $data = array();
        $data['customer_name'] = $this->input->post('customer_name');
        $data['customer_email'] = $this->input->post('customer_email');
        $data['customer_password'] = md5($this->input->post('customer_password'));
        $data['customer_address'] = $this->input->post('customer_address');
        $data['customer_city'] = $this->input->post('customer_city');
        // $data['customer_country'] = $this->input->post('customer_country');
        $data['customer_phone'] = $this->input->post('customer_phone');
        // $data['customer_zipcode'] = $this->input->post('customer_zipcode');

        $this->form_validation->set_rules('customer_name', 'Customer Name', 'trim|required');
        $this->form_validation->set_rules('customer_email', 'Customer Email', 'trim|required|valid_email|is_unique[tbl_customer.customer_email]');
        $this->form_validation->set_rules('customer_password', 'Customer Password', 'trim|required');
        $this->form_validation->set_rules('customer_address', 'Customer Address', 'trim|required');
        $this->form_validation->set_rules('customer_city', 'Customer City', 'trim|required');
        // $this->form_validation->set_rules('customer_country', 'Customer Country', 'trim|required');
        $this->form_validation->set_rules('customer_phone', 'Customer Phone', 'trim|required');
        // $this->form_validation->set_rules('customer_zipcode', 'Customer Zipcode', 'trim|required');

        if ($this->form_validation->run() == true) {
            $result = $this->web_model->save_customer_info($data);
            if ($result) {
                $this->session->set_flashdata('customer_name', $data['customer_name']);
                $this->session->set_flashdata('customer_email', $data['customer_email']);
                redirect('register/success');
            } else {
                $this->session->set_flashdata('message', 'Customer Registration Fail');
                redirect('customer/register');
            }
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('customer/register');
        }
    }

    public function customer_logincheck()
    {
        $data = array();
        $data['customer_email'] = $this->input->post('customer_email');
        $data['customer_password'] = md5($this->input->post('customer_password'));

        $this->form_validation->set_rules('customer_email', 'Customer Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('customer_password', 'Customer Password', 'trim|required');

        if ($this->form_validation->run() == true) {
            $result = $this->web_model->get_customer_info($data);
            if ($result) {
                $this->session->set_userdata('customer_id', $result->customer_id);
                $this->session->set_userdata('customer_email', $data['customer_email']);
                redirect('/');
            } else {
                $this->session->set_flashdata('message', 'Customer Login Fail');
                redirect('customer/login');
            }
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('customer/login');
        }
    }

    public function customer_shipping_login()
    {
        $data = array();
        $data['customer_email'] = $this->input->post('customer_email');
        $data['customer_password'] = md5($this->input->post('customer_password'));

        $this->form_validation->set_rules('customer_email', 'Customer Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('customer_password', 'Customer Password', 'trim|required');

        if ($this->form_validation->run() == true) {
            $result = $this->web_model->get_customer_info($data);
            if ($result) {
                $this->session->set_userdata('customer_id', $result->customer_id);
                $this->session->set_userdata('customer_email', $result->customer_email);
                redirect('customer/shipping');
            } else {
                $this->session->set_flashdata('messagelogin', 'Customer Login Fail');
                redirect('user_form');
            }
        } else {
            $this->session->set_flashdata('messagelogin', validation_errors());
            redirect('user_form');
        }
    }

    public function customer_shipping_register()
    {
        $data = array();
        $data['customer_name'] = $this->input->post('customer_name');
        $data['customer_email'] = $this->input->post('customer_email');
        $data['customer_password'] = md5($this->input->post('customer_password'));
        $data['customer_address'] = $this->input->post('customer_address');
        $data['customer_city'] = $this->input->post('customer_city');
        $data['customer_country'] = $this->input->post('customer_country');
        $data['customer_phone'] = $this->input->post('customer_phone');
        $data['customer_zipcode'] = $this->input->post('customer_zipcode');

        $this->form_validation->set_rules('customer_name', 'Customer Name', 'trim|required');
        $this->form_validation->set_rules('customer_email', 'Customer Email', 'trim|required|valid_email|is_unique[tbl_customer.customer_email]');
        $this->form_validation->set_rules('customer_password', 'Customer Password', 'trim|required');
        $this->form_validation->set_rules('customer_address', 'Customer Address', 'trim|required');
        $this->form_validation->set_rules('customer_city', 'Customer City', 'trim|required');
        $this->form_validation->set_rules('customer_country', 'Customer Country', 'trim|required');
        $this->form_validation->set_rules('customer_phone', 'Customer Phone', 'trim|required');
        $this->form_validation->set_rules('customer_zipcode', 'Customer Zipcode', 'trim|required');

        if ($this->form_validation->run() == true) {
            $result = $this->web_model->save_customer_info($data);

            if ($result) {
                $this->session->set_userdata('customer_id', $result);
                redirect('customer/shipping');
            } else {
                $this->session->set_flashdata('message', 'Customer Shipping Fail');
                redirect('user_form');
            }
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('user_form');
        }
    }

    public function customer_shipping()
    {
        $data = array();
        $this->load->view('web/inc/header');
        $this->load->view('web/pages/customer_shipping');
        $this->load->view('web/inc/footer');
    }

    public function save_shipping_address()
    {
        // var_dump($_POST);
        // die;
        // $data['shipping_name'] = $this->input->post('shipping_name');
        // $data['shipping_address'] = $this->input->post('shipping_address');
        // $data['shipping_city'] = $this->input->post('shipping_city');
        // $data['shipping_phone'] = $this->input->post('shipping_phone');
        // $data['shipping_cost'] = $this->input->post('shipping_cost');
        $data = $this->input->post();
        unset($data['shipping_province_id']);
        $result = $this->web_model->save_shipping_address($data);
        $this->session->set_userdata('shipping_id', $result);
        if ($result) {
            redirect('checkout');
        } else {
            $this->session->set_flashdata('message', 'Customer Shipping Fail');
            redirect('customer/shipping');
        }
    }

    public function checkout()
    {
        $data = array();
        $this->load->view('web/inc/header');
        $this->load->view('web/pages/checkout');
        $this->load->view('web/inc/footer');
    }

    public function payment()
    {
        $data = array();
        $this->load->view('web/inc/header');
        $this->load->view('web/pages/payment');
        $this->load->view('web/inc/footer');
    }

    public function save_order()
    {
        $data['payment_type'] = $this->input->post('payment');

        $this->form_validation->set_rules('payment', 'Payment', 'trim|required');

        if ($this->form_validation->run() == true) {
            $payment_id = $this->web_model->save_payment_info($data);
            $odata = array();
            $odata['customer_id'] = $this->session->userdata('customer_id');
            $odata['shipping_id'] = $this->session->userdata('shipping_id');
            $odata['payment_id'] = $payment_id;
            $tax = ($this->cart->total() * 15) / 100;
            $odata['order_total'] = $tax + $this->cart->total();

            $order_id = $this->web_model->save_order_info($odata);

            $oddata = array();

            $myoddata = $this->cart->contents();



            foreach ($myoddata as $oddatas) {


                $oddata['order_id'] = $order_id;
                $oddata['product_id'] = $oddatas['id'];
                $oddata['product_name'] = $oddatas['name'];
                $oddata['product_price'] = $oddatas['price'];
                $oddata['product_sales_quantity'] = $oddatas['qty'];
                $oddata['product_image'] = $oddatas['options']['product_image'];
                $this->web_model->save_order_details_info($oddata);
            }

            if ($payment_method == 'paypal') {
            }
            if ($payment_method == 'cashon') {
            }


            $this->cart->destroy();

            redirect('payment');
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('checkout');
        }
    }

    public function pdf($order_id)
    {
        $data = array();
        $order_info = $this->manageorder_model->order_info_by_id($order_id);
        $customer_id = $order_info->customer_id;
        $shipping_id = $order_info->shipping_id;
        $payment_id = $order_info->payment_id;


        $data['customer_info'] = $this->manageorder_model->customer_info_by_id($customer_id);
        $data['shipping_info'] = $this->manageorder_model->shipping_info_by_id($shipping_id);
        $data['payment_info'] = $this->manageorder_model->payment_info_by_id($payment_id);
        $data['order_details_info'] = $this->manageorder_model->orderdetails_info_by_id($order_id);
        $data['order_info'] = $this->manageorder_model->order_info_by_id($order_id);
        // var_dump($data);

        $this->load->library('Pdf');
        $this->load->view('admin/pages/pdf', $data, true);

        // die;
        $this->pdf->load_view('admin/pages/pdf', $data);
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->render();
        $this->pdf->stream('pesanan-' . $order_id . '.pdf');
    }

    public function search()
    {

        $search = $this->input->get('search');

        if (!empty($search)) {
            $data = array();
            $data['get_all_product'] = $this->web_model->get_all_search_product($search);
            $data['search'] = $search;

            if ($data['get_all_product']) {
                $this->load->view('web/inc/header');
                $this->load->view('web/pages/search', $data);
                $this->load->view('web/inc/footer');
            } else {
                redirect('error');
            }
        } else {
            redirect('error');
        }
    }

    function logout()
    {
        $this->session->unset_userdata('customer_id');
        $this->session->unset_userdata('customer_email');
        redirect('customer/login');
    }

    function getCity()
    {
        $id = $this->input->get('id');
        if (isset($id)) {
            $result = $this->db->get_where('city', ['province_id' => $this->input->get('id')])->result();
            echo json_encode(['data' => $result, 'success' => TRUE]);
        }
    }

    function getOngkir()
    {
        $this->load->model('Ongkir_Model', 'ongkir');
        // var_dump($ongkir)
        $p = $_POST;
        $data =  $this->ongkir->getOngkir($p['destination'], $p['kurir']);
        echo json_encode(['success' => TRUE, 'data' => json_decode($data)]);
        // $ongkir->getOngkir()
    }
}
