<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\AdminModel;
use App\Models\LeadModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class AdminController extends Controller
{

    public function __construct()
    {
        helper(['url', 'form']);
        session();
    }

    public function login()
    {
        return view('admin/login');
    }

    public function loginCheck()
    {
        $session = session();
        $model = new AdminModel();
        $username = $this->request->getPost('username');
        $password = md5($this->request->getPost('password'));

        $admin = $model->where('username', $username)->where('password', $password)->first();

        if ($admin) {
            $session->set(['admin_logged_in' => true, 'admin_id' => $admin['id']]);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->to('/login')->with('error', 'Invalid Credentials');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
    public function dashboard()
    {
        if (!session()->get('admin_logged_in')) {
            return redirect()->to('/login');
        }

        return view('admin/dashboard');
    }

    public function add()
    {
        return view('admin/add_product');
    }

    public function leads()
    {
        $from = $this->request->getGet('from');
        $to = $this->request->getGet('to');

        $leadModel = new \App\Models\LeadModel();

        if ($from && $to) {
            $leads = $leadModel
                ->where('DATE(created_at) >=', $from)
                ->where('DATE(created_at) <=', $to)
                ->orderBy('created_at', 'DESC')
                ->findAll();
        } else {
            $leads = $leadModel->orderBy('created_at', 'DESC')->findAll();
        }

        return view('admin/leads', [
            'leads' => $leads
        ]);            // Load the leads view
    }

    public function export_excel()
    {
        $leadModel = new \App\Models\LeadModel();
        $leads = $leadModel->findAll();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set headers
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Name');
        $sheet->setCellValue('C1', 'Mobile');
        $sheet->setCellValue('D1', 'Email');
        $sheet->setCellValue('E1', 'Note');
        $sheet->setCellValue('F1', 'Created At');

        // Fill rows
        $row = 2;
        foreach ($leads as $lead) {
            $sheet->setCellValue("A$row", $lead['id']);
            $sheet->setCellValue("B$row", $lead['name']);
            $sheet->setCellValue("C$row", $lead['mobile']);
            $sheet->setCellValue("D$row", $lead['email']);
            $sheet->setCellValue("E$row", $lead['note']);
            $sheet->setCellValue("F$row", $lead['created_at']);
            $row++;
        }

        // Output to browser
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="leads.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit;
    }

}
