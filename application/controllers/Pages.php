<?php
class Pages extends CI_Controller {

        public function view($page)
        {
            //对html文件做特殊处理
            if(substr($page,-5,5) == '.html')
            {
                $page = substr($page,0,-5);
            }
            if (!file_exists(APPPATH.'views/'.$page.'.html'))
            {
                // Whoops, we don't have a page for that!
                show_404();
            }
        $this->load->view($page.'.html');
        }
}
