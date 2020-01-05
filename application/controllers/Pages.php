<?php
class Pages extends CI_Controller {

        public function view($page)
        {
        if (!file_exists(APPPATH.'views/'.$page.'.html'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
        $this->load->view($page.'.html');
        }
}
