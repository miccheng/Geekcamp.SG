<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Schedule extends CI_Controller {
    public function view_schedule($year = -1){
        if ($year === -1) {
            $year = 2012;
        }
        $data['meta_title'] = 'Schedule for '.$year;
        $data['meta_description'] = 'GeekcampSG\'s schedule for '.$year.'. Cya at #GeekcampSG!';
        $data['content'] = $this->load->view('schedules/schedule'.$year, '', TRUE);
        $this->load->view('core', $data);

    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */