<?php
class Matakuliah extends CI_controller
{

    public function index()
    {

        $this->load->view('View-Form-Matakuliah');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required|min_length[3]', [
            'required' => 'Kode Matakuliah Harus diisi',
            'min_length' => 'Kode terlalu pendek'
        ]);

        $this->form_validation->set_rules('nama', 'Nama Matakuliah',
            'required|min_length[3]', [
                'required' => 'Nama Matakuliah Harus diisi',
                'min_length' => 'Nama terlalu pendek'
        ]);

        if ($this->form_validation->run() != true) {
            $this->load->view('View-Form-Matakuliah');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')
            ];

            $this->load->view('View-Data-Matakuliah', $data);
        }
    }
}

                   
