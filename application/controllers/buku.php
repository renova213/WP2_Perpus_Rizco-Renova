<?php
class Buku extends CI_Controller
{
    public function kategori()
    {
        $data['judul'] = 'Kategori Buku';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->ModelBuku->getKategori()->result_array();
        $this->form_validation->set_rules(
            'kategori',
            'Kategori',
            'required',
            [
                'required' => 'Judul Buku harus diisi'
            ]
        );
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/topbar', $data);
            $this->load->view('buku/kategori', $data);
            $this->load->view('admin/footer');
        } else {
            $data = [
                'kategori' => $this->input->post('kategori')
            ];
            $this->ModelBuku->simpanKategori($data);
            redirect('buku/kategori');
        }
    }
    public function hapusKategori()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelBuku->hapusKategori($where);
        redirect('buku/kategori');
    }

    public function ubahKategori()
    {
        $data['judul'] = 'Ubah Data Kategori';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->ModelBuku->kategoriWhere(['id' => $this->uri->segment(3)])->result_array();

        $data['kategori'] = $this->ModelBuku->getKategori()->result_array();
        $this->form_validation->set_rules('kategori', 'Nama Kategori', 'required|min-length[3]', [
            'required' => 'Judul Buku harus diisi',
            'min_length' => 'Judul buku terlalu pendek'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/topbar', $data);
            $this->load->view('buku/ubah_kategori', $data);
            $this->load->view('admin/footer');
        } else {
            $data = ['kategori' => $this->input->post('kategori', true)];
            $this->ModelBuku->updateKategori(['id' => $this->input->post('id')], $data);
            redirect('buku/kategori');
        }
    }
}
