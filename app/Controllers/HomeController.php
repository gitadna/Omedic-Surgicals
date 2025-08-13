<?php

namespace App\Controllers;
use App\Models\LeadModel;

class HomeController extends BaseController
{
    public function index()
    {
        return view('user/home');
    }

    public function neuro_home()
    {
        return view('user/Neuro/neuro_home');
    }

    public function plastic_home()
    {
        return view('user/Plastic/plastic_home');
    }

    public function microforceps()
    {
        return view('user/Plastic/Categories/micro_forceps');
    }

    public function microscissors()
    {
        return view('user/Plastic/Categories/micro_scissors_and_micro_needle_holder');
    }

    public function microvascularclamps()
    {
        return view('user/Plastic/Categories/microvascular_clamps');
    }


    public function tray()
    {
        return view('user/Plastic/Categories/tray');
    }

    public function instrumentssets()
    {
        return view('user/Plastic/Categories/instrument_sets');
    }

    public function plastic_surgeon()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('products');
        $builder->where('category', 'Plastic');
        $query = $builder->get();
        $products = $query->getResultArray();

        // Fetch attributes for each product
        foreach ($products as &$product) {
            $attrQuery = $db->table('product_attributes')
                ->where('product_id', $product['id'])
                ->get();
            $product['attributes'] = $attrQuery->getResultArray();
        }

        $data['products'] = $products;

        return view('user/plastic_surgeon', $data);
    }



    public function neuro_surgeon()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('products');
        $builder->where('category', 'Neuro');
        $query = $builder->get();
        $products = $query->getResultArray();

        // Fetch attributes for each product
        foreach ($products as &$product) {
            $attrQuery = $db->table('product_attributes')
                ->where('product_id', $product['id'])
                ->get();
            $product['attributes'] = $attrQuery->getResultArray();
        }

        $data['products'] = $products;

        return view('user/neuro_surgeon', $data);
    }

    public function aboutus()
    {
        return view('user/about_us');
    }

    public function contactus()
    {
        return view('user/contact_us');
    }

    public function services()
    {
        return view('user/services');
    }

    public function save_lead()
    {
        helper(['form', 'url']);

        $leadModel = new LeadModel();

        // Get form values
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'mobile' => $this->request->getPost('mobile'),
            'note' => $this->request->getPost('note'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        // Save to DB
        $leadModel->save($data);

        // Send email
        $email = \Config\Services::email();
        $email->setFrom('no-reply@yourdomain.com', 'Omedic Surgicals');
        $email->setTo('kadiwalaadnan123@gmail.com');

        $email->setSubject('New Lead Submission from Website');

        $message = "
            <h3>New Contact Submission</h3>
            <p><strong>Name:</strong> {$data['name']}</p>
            <p><strong>Email:</strong> {$data['email']}</p>
            <p><strong>Mobile:</strong> {$data['mobile']}</p>
            <p><strong>Message:</strong> {$data['note']}</p>
        ";

        $email->setMessage($message);
        $email->setMailType('html');

        if ($email->send()) {
            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } else {
            return redirect()->back()->with('error', 'Unable to send your message. Please try again.');
        }
    }

}
