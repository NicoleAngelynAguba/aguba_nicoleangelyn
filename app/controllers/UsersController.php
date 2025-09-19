<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UsersController extends Controller {
    public function __construct()
    {
        parent::__construct();
        $this->call->model('UsersModel');
        $this->call->library('pagination'); 
    }

    public function index()
    {
        $page = 1;
        if (isset($_GET['page']) && !empty($_GET['page'])) {
            $page = $this->io->get('page');
        }

        
        $q = '';
        if (isset($_GET['q']) && !empty($_GET['q'])) {
            $q = trim($this->io->get('q'));
        }

        $records_per_page = 5;

        
        $all = $this->UsersModel->page($q, $records_per_page, $page);
        $data['user'] = $all['records'];
        $total_rows = $all['total_rows'];

         
        $this->pagination->set_options([
            'first_link'     => '⏮ First',
            'last_link'      => 'Last ⏭',
            'next_link'      => 'Next →',
            'prev_link'      => '← Prev',
            'page_delimiter' => '&page='
        ]);
        $this->pagination->set_theme('default');
        $this->pagination->initialize(
            $total_rows,
            $records_per_page,
            $page,
            site_url('users/index/') . '?q=' . urlencode($q)
        );
        $data['page'] = $this->pagination->paginate();

        $this->call->view('users/index/', $data);
    }

    public function create()
    {
        if ($this->io->method() === 'post') {
            $fname = $this->io->post('fname');
            $lname = $this->io->post('lname');
            $mname = $this->io->post('mname');
            $email = $this->io->post('email');

            $data = [
                'fname' => $fname,
                'lname' => $lname,
                'mname' => $mname,
                'email' => $email
            ];

            try {
                $this->UsersModel->insert($data);
                redirect('users/create/');
            } catch (Exception $e) {
                echo 'Something went wrong while creating user: ' . htmlspecialchars($e->getMessage());
            }
        } else {
            $this->call->view('users/create/');
        }
    }

    public function update($id)
    {
        if ($this->io->method() === 'post') {
            $fname = $this->io->post('fname');
            $lname = $this->io->post('lname');
            $mname = $this->io->post('mname');
            $email = $this->io->post('email');

            $data = [
                'fname' => $fname,
                'lname' => $lname,
                'mname' => $mname,
                'email' => $email
            ];

            try {
                $this->UsersModel->update($id, $data);
                redirect('users/update/');
            } catch (Exception $e) {
                echo 'Something went wrong while updating user: ' . htmlspecialchars($e->getMessage());
            }
        } else {
            $data['user'] = $this->UsersModel->find($id);
            $this->call->view('/users/update/', $data);
        }
    }

    public function delete($id)
    {
       if($this->UsersModel->delete($id))
       {
            redirect('/users/delete/');
       }
       else{
        echo'error';
       }
    }
}

