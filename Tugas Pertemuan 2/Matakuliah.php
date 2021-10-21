<?php
class Matakuliah extends CI_controller
{

    public function index()
    {

        $this->load->view('View-Form-Matakuliah');
    }

    public function cetak()
    {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')
            ];

            $this->load->view('View-Data-Matakuliah', $data);

    }
}
