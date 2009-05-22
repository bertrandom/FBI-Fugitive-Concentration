<?php

/**
 * home actions.
 *
 * @package    fbiconcentration
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class homeActions extends sfActions {

    public function executeIndex() {

        // These are the results from batch/updateImages.php
        $images = array (
  'http://www.fbi.gov/wanted/topten/fugitives/laden.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/topten/fugitives/laden.jpg',
  ),
  'http://www.fbi.gov/wanted/topten/fugitives/fisher.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/topten/fugitives/fisher1bw.jpg',
    1 => 'http://www.fbi.gov/wanted/topten/fugitives/fisher2bw.jpg',
    2 => 'http://www.fbi.gov/wanted/topten/fugitives/fisher5bw.jpg',
  ),
  'http://www.fbi.gov/wanted/topten/fugitives/flores_a.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/topten/fugitives/flores_a_bw.jpg',
    1 => 'http://www.fbi.gov/wanted/topten/fugitives/flores_a2.jpg',
  ),
  'http://www.fbi.gov/wanted/topten/fugitives/gerena.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/topten/fugitives/gerena1.jpg',
    1 => 'http://www.fbi.gov/wanted/topten/fugitives/gerena2.jpg',
    2 => 'http://www.fbi.gov/wanted/topten/fugitives/gerenaage.jpg',
  ),
  'http://www.fbi.gov/wanted/topten/fugitives/godwin.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/topten/fugitives/godwin.jpg',
    1 => 'http://www.fbi.gov/wanted/topten/fugitives/godwin3.jpg',
    2 => 'http://www.fbi.gov/wanted/topten/fugitives/godwinaged.jpg',
  ),
  'http://www.fbi.gov/wanted/topten/fugitives/preciado_e.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/topten/fugitives/preciado_e1.jpg',
    1 => 'http://www.fbi.gov/wanted/topten/fugitives/preciado_e2.jpg',
    2 => 'http://www.fbi.gov/wanted/topten/fugitives/preciado_e3.jpg',
    3 => 'http://www.fbi.gov/wanted/topten/fugitives/preciado_e4.jpg',
  ),
  'http://www.fbi.gov/wanted/topten/fugitives/brown_jd.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/topten/fugitives/brown_jd.jpg',
  ),
  'http://www.fbi.gov/wanted/topten/fugitives/bulger.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/topten/fugitives/bulgernew1.jpg',
    1 => 'http://www.fbi.gov/wanted/topten/fugitives/bulgernew2.jpg',
    2 => 'http://www.fbi.gov/wanted/topten/fugitives/bulgernew3.jpg',
    3 => 'http://www.fbi.gov/wanted/topten/fugitives/bulger_v1.jpg',
    4 => 'http://www.fbi.gov/wanted/topten/fugitives/bulger6.jpg',
  ),
  'http://www.fbi.gov/wanted/topten/fugitives/lopez-orozco.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/topten/fugitives/lopez-orozco1.jpg',
    1 => 'http://www.fbi.gov/wanted/topten/fugitives/lopez-orozco2.jpg',
    2 => 'http://www.fbi.gov/wanted/topten/fugitives/lopez-orozco3.jpg',
  ),
  'http://www.fbi.gov/wanted/topten/fugitives/harper_ee.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/topten/fugitives/harper_ee1.jpg',
    1 => 'http://www.fbi.gov/wanted/topten/fugitives/harper_ee2.jpg',
    2 => 'http://www.fbi.gov/wanted/topten/fugitives/harper_ee3.jpg',
  ),
  'http://www.fbi.gov/wanted/terrorists/tersandiego_da.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/terrorists/sandiego_da2.jpg',
    1 => 'http://www.fbi.gov/wanted/terrorists/sandiego_da3.jpg',
  ),
  'http://www.fbi.gov/wanted/terrorists/terbadawi.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/terrorists/terbadawi1.jpg',
    1 => 'http://www.fbi.gov/wanted/terrorists/terbadawi2.jpg',
    2 => 'http://www.fbi.gov/wanted/terrorists/terbadawi3.jpg',
  ),
  'http://www.fbi.gov/wanted/terrorists/terhamadei2.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/terrorists/terhamadei05.jpg',
    1 => 'http://www.fbi.gov/wanted/terrorists/terhamadei04.jpg',
    2 => 'http://www.fbi.gov/wanted/terrorists/terhamadei85a.jpg',
    3 => 'http://www.fbi.gov/wanted/terrorists/terhamadei85b.jpg',
  ),
  'http://www.fbi.gov/wanted/terrorists/terhapilon.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/terrorists/terhapilon2000.jpg',
    1 => 'http://www.fbi.gov/wanted/terrorists/terhapilon.jpg',
  ),
  'http://www.fbi.gov/wanted/terrorists/terawda.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/terrorists/terawda.jpg',
  ),
  'http://www.fbi.gov/wanted/terrorists/tershallah.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/terrorists/tershallah.jpg',
    1 => 'http://www.fbi.gov/wanted/terrorists/tershallah2.jpg',
    2 => 'http://www.fbi.gov/wanted/terrorists/tershallah3.jpg',
  ),
  'http://www.fbi.gov/wanted/terrorists/teralyacoub.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/terrorists/teralyacoub.jpg',
    1 => 'http://www.fbi.gov/wanted/terrorists/teralyacoub2.jpg',
  ),
  'http://www.fbi.gov/wanted/terrorists/teraladel.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/terrorists/teraladel.jpg',
  ),
  'http://www.fbi.gov/wanted/terrorists/terelhoorie.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/terrorists/terelhoorie.jpg',
  ),
  'http://www.fbi.gov/wanted/terrorists/teralmughassil.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/terrorists/teralmughassil.jpg',
  ),
  'http://www.fbi.gov/wanted/terrorists/termsalam.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/terrorists/termsalam.jpg',
    1 => 'http://www.fbi.gov/wanted/terrorists/termsalam2.jpg',
    2 => 'http://www.fbi.gov/wanted/terrorists/termsalam3.jpg',
    3 => 'http://www.fbi.gov/wanted/terrorists/termsalam4.jpg',
    4 => 'http://www.fbi.gov/wanted/terrorists/termsalamenhanced1.jpg',
    5 => 'http://www.fbi.gov/wanted/terrorists/termsalamenhanced2.jpg',
  ),
  'http://www.fbi.gov/wanted/terrorists/teryasin.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/terrorists/teryasin.jpg',
    1 => 'http://www.fbi.gov/wanted/terrorists/teryasin2.jpg',
  ),
  'http://www.fbi.gov/wanted/terrorists/terelbaneh.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/terrorists/terelbaneh1.jpg',
    1 => 'http://www.fbi.gov/wanted/terrorists/terelbaneh2.jpg',
    2 => 'http://www.fbi.gov/wanted/terrorists/terelbaneh3.jpg',
  ),
  'http://www.fbi.gov/wanted/terrorists/terali.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/terrorists/terali.jpg',
  ),
  'http://www.fbi.gov/wanted/terrorists/terizzaldin.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/terrorists/terizzaldin.jpg',
  ),
  'http://www.fbi.gov/wanted/terrorists/termohammed.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/terrorists/termohammed.jpg',
    1 => 'http://www.fbi.gov/wanted/terrorists/termohammed2.jpg',
    2 => 'http://www.fbi.gov/wanted/terrorists/termohammed3.jpg',
    3 => 'http://www.fbi.gov/wanted/terrorists/termohammed4.jpg',
    4 => 'http://www.fbi.gov/wanted/terrorists/termohammed5.jpg',
    5 => 'http://www.fbi.gov/wanted/terrorists/termohammedenhanced1.jpg',
    6 => 'http://www.fbi.gov/wanted/terrorists/termohammedenhanced2.jpg',
    7 => 'http://www.fbi.gov/wanted/terrorists/termohammedenhanced3.jpg',
  ),
  'http://www.fbi.gov/wanted/terrorists/teralliby.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/terrorists/teralliby.jpg',
  ),
  'http://www.fbi.gov/wanted/terrorists/teratwa.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/terrorists/teratwa.jpg',
  ),
  'http://www.fbi.gov/wanted/terrorists/teralzawahiri.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/terrorists/teralzawahiri.jpg',
  ),
  'http://www.fbi.gov/wanted/terrorists/terabdullah.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/terrorists/terabdullah.jpg',
  ),
  'http://www.fbi.gov/wanted/terrorists/teralnasser.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/terrorists/teralnasser.jpg',
  ),
  'http://www.fbi.gov/wanted/terrorists/terbinladen.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/terrorists/terbinladen.jpg',
  ),
  'http://www.fbi.gov/wanted/terrorists/gadahn_a.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/terrorists/gadahn_a1.jpg',
    1 => 'http://www.fbi.gov/wanted/terrorists/gadahn_a2.jpg',
    2 => 'http://www.fbi.gov/wanted/terrorists/gadahn_a3.jpg',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/rodriguez_cj.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/rodriguez_cj1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/rodriguez_cj2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/deoca_am.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/deoca_am1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/deoca_am2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/deoca_am3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/medina_c.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/medina_c1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/medina_c2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/medina_c3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/medina_c4.jpg',
    4 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/medina_c5.jpg',
    5 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/said_y.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/said_y.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/rivera_je.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/rivera_je.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/munoz_cj.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/munoz_cj.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/gonzalez_jm.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/gonzalez_jm1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/gonzalez_jm2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/saenz_jl.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/saenz_jl1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/saenz_jl2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/brizuela_hm.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/brizuela_hm.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/brizuela_hm2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/brizuela_hm3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/flores-albarran_g.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/flores-albarran_g1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/flores-albarrang2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/flores-albarran_g3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/flores-albarrang4.jpg',
    4 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/flores-albarran_g5.jpg',
    5 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/fishman_lw.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/fishman_lw.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/fishman_lw_age1.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/fishman_lw_age2.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/fishmanage3.jpg',
    4 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/fishman_lw_age4.jpg',
    5 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/fishmanage5.jpg',
    6 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/fishman_lw_age6.jpg',
    7 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/fishman_lw_age7.jpg',
    8 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/fishman_lw_age8.jpg',
    9 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/flores-albarran_r.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/flores-albarran_r.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/domangue_ea.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/domangue_ea1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/domangue_ea2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/domanque_ea3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/halligan_s.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/halligan_s1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/halligan_s2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/halligan_s3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/dean_ca.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/dean_ca.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/harmon_pj.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/harmon_pj1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/harmon_pj2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/harmon_pj3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/harmon_pj4.jpg',
    4 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/harmon_pj5.jpg',
    5 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/davronov_s.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/davronov_s1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/davronov_s2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/morales_r.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/morales_m.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/castaneda_gp.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/castaneda_gp1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/castaneda_gp2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/castaneda_gp3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/head_hl.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/head_hl1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/head_hl2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/castaneda_cc.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/castaneda_cc.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/jordan_wj.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/jordan_wj1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/jordan_wj2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/zachs_am.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/zachs_am1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/zachs_am2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/zachs_am3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/padilla_jr.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/padilla_jr.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/barboza_ab.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/barboza_ab.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/varela_j.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/varela_j.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/varela_h.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/varela_h.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/bare_rl.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/bare_rl.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/taylor_wc.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/taylor_wc1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/taylor_wc2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/taylor_wc3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/aguilar_s.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/aguilar_s.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/suh_dm.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/suh_dm.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/gutierrez-cruz_c.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/gutierrez-cruz_c.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/scott_a.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/scott_a1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/scott_a2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/scott_a3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/carter_kl.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/carter_kl.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/scaife_d.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/scaife_d1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/scaife_d2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/scaife_d3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/roman_b.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/roman_b1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/roman_b2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/castro_am.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/castro_am.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/pasha_mm.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/pasha_mm1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/pasha_mm2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/martinez_b.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/martinez_b.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/nevarez_eg.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/nevarez_eg.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/elamin_mb.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/elamin_mb.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/elamin_mb2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/gonzalez_f.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/gonzalez_f1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/gonzalez_f2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/gonzalez_mg.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/gonzalez_mg.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/juarez_oh.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/juarez_oh1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/juarez_oh2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/mayorga_jc.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/mayorga_jc1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/mayorga_jc2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/mayorga_jc3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/mayorga_jc4.jpg',
    4 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/godbolt-molder_rl.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/godbolt-molder_rl1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/godbolt-molder_rl2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/godbolt-molder_rl3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/martinez_jc.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/martinez_jc.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/contreras_lm.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/contreras_lm.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/martinez_f.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/martinez_f1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/martinez_f2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/martinez_f3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/martinez_f4.jpg',
    4 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/webb_de.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/webb_de1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/webb_de2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/eubanks_le.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/eubanks_le-1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/eubanks_le-2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/eubanks_le-3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/eubanks_le-4.jpg',
    4 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/eubanks_le-5.jpg',
    5 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/eubanks_le-6.jpg',
    6 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/gutierrez_sa.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/gutierrez_sa.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/el-zoghpy_ta.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/el-zoghpy_ta.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/serrano_f.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/serrano_f1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/serrano_f2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/serrano_f3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/trejo_d.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/trejo_d.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/roblero_ez.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/roblero_ez.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/roblero_ez2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/garcia_li.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/garcia_li.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/mendoza_a.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/mendoza_a.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/rodriguez_jm.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/rodriguez_jm.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/stern_w.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/stern_w1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/stern_w2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/delgado_a.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/delgado_a1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/delgado_a2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/paredes_jc.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/paredes_jc.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/cerda-anima_e.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/cerda-anima_e.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/cerda-anima_e2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/murillo_fa.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/murillo_fa1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/murillo_fa2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/gonzalez_l.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/gonzalez_l.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/banuelos_al.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/banuelos_al.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/fowler_a.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/fowler_sketch.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/fowler_a2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/fowler_a3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/hermosillio-alcaraz_ma.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/hermosillio-alcaraz_ma.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/michaels_la.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/michaels_la1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/michaels_la2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/martinez_vr.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/martinez_vr.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/frett_ad.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/frett_ad.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/solorio_f.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/solorio_f.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/murders/lopez_a.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/lopez_a1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/lopez_a2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/murders/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/additional/salazar_g.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/salazar_g.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/additional/tran_ld.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/tran_ld1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/tran_ld2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/tran_ld3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/additional/cordery_cb.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/cordery_cb.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/additional/edmondson_lg.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/edmondson_lg.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/edmondson_lg2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/edmondson_lg3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/additional/vazquez_fl.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/vazquez_fl1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/vazquez_fl2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/vazquez_fl3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/additional/copper_dr.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/copper_dr.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/additional/hernandez_aam.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/hernandez_aam1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/hernandez_aam2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/additional/dawson_lc.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/dawson_lc1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/dawson_lc2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/dawson_lc3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/dawson_lc4.jpg',
    4 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/additional/trites_lj.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/trites_lj1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/trites_lj2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/trites_lj3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/additional/skundrich_r.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/skundrich_r2.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/skundrich_r3.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/skundrich_r.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/skundrich_r4.jpg',
    4 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/skundrich_r5.jpg',
    5 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/skundrich_r6.jpg',
    6 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/additional/islam_z.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/islam_z.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/additional/chavira_o.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/chavira_o1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/chavira_o2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/additional/rosado_l.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/rosado_l1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/rosado_l2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/rosado_l3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/additional/vasquez_e.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/vasquez_e1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/vasque_e2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/vasquez_e3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/vasquez_e4.jpg',
    4 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/additional/trapala_jl.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/trapala_jl1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/trapala_jl2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/additional/pimienta_rr.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/pimienta_rr.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/additional/morquecho_le.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/morquecho_le.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/additional/salais_c.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/salais_c1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/salais_c2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/additional/mcafee_me.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/mcafee_me1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/mcafee_me2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/additional/orozco_sl.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/orozco_sl.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/additional/waller_mg.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/waller_mg.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/additional/montoya_r.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/montoya_r.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/additional/king_d.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/king_d1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/king_d2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/additional/mejia_jc.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/mejia_jc1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/mejia_jc2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/mejia_jc3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/vc/additional/davis_jl.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/davis_jl.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/vc/additional/../../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cyber/onwuhara_te.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cyber/onwuhara_te1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cyber/onwuhara_te2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cyber/onwuhara_te3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/cyber/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cyber/dong_j.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cyber/dong_j.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cyber/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cyber/echouafni_s.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cyber/echouafni_s1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cyber/echouafni_i2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cyber/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/toth_ej.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/toth_ej1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/toth_ej2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/ruiz-rivera_ma.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/ruiz-rivera_ma1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/ruiz-rivera_ma2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/dieudonne_f.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/dieudonne.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/brovold_cl.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/brovold_cl1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/brovold_cl2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/dunning_jc.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/dunning_jc1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/dunning_jc2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cac/dunning_jc3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/cac/dunning_jc4.jpg',
    4 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/poteat_ja.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/poteat_ja.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/enriquez_h.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/enriquez_h1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/enriquez_h2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/cozart_lo.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/cozart_lo1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/cozart_lo2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/hollin_c.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/hollin_c1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/hollin_c2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cac/hollin_c3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/cac/hollin_c4.jpg',
    4 => 'http://www.fbi.gov/wanted/fugitives/cac/hollin_c5.jpg',
    5 => 'http://www.fbi.gov/wanted/fugitives/cac/hollin_c6.jpg',
    6 => 'http://www.fbi.gov/wanted/fugitives/cac/hollin_c7.jpg',
    7 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/laguardia_rw.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/laguardia_rw1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/laguardia_rw2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/fontenot_rd.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/fontenot_rd1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/fontenot_rd2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/copp_wl.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/copp_wl1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/copp_wl2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cac/copp_wl3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/keller_md.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/keller_md.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/hars_ej.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/hars_ej1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/hars_ej2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cac/hars_ej3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/cac/hars_ej4.jpg',
    4 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/willingham_w.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/willingham_w.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/lopez_mi.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/lopez_mi.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/silsbee_wa.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/silsbee_wa1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/silsbee_wa2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cac/silsbee_wa3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/cac/silsbee_wa4.jpg',
    4 => 'http://www.fbi.gov/wanted/fugitives/cac/silsbee_wa5.jpg',
    5 => 'http://www.fbi.gov/wanted/fugitives/cac/silsbee_wa6.jpg',
    6 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/hudson_gl.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/hudson_gl.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/hudson_gl2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/reisch_ec.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/reisch_ec1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/reisch_ec2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/brantz_aj.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/brantz_aj1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/brantz_aj2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cac/brantz_aj3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/moller_ek.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/moller_ek1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/molle_ekr2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/hyatt_rs.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/hyatt_rs.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/mexquititla_bg.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/mexquititla_bg.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/reichert_rc.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/reichert_rc.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/reichert_rcage1.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cac/reichert_rcage2.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/dewater_ak.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/dewater_ak.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/barroso_ja.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/barroso_ja.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/wehby_j.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/wehby_j.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cac/sliwinski_te.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cac/sliwinski_te.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cac/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/mercer_f.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/mercer_f1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/mercer_f2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cei/mercer_f3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/cei/mercer_f4.jpg',
    4 => 'http://www.fbi.gov/wanted/fugitives/cei/mercer_f5.jpg',
    5 => 'http://www.fbi.gov/wanted/fugitives/cei/mercer_f6.jpg',
    6 => 'http://www.fbi.gov/wanted/fugitives/cei/mercer_f7.jpg',
    7 => 'http://www.fbi.gov/wanted/fugitives/cei/mercer_f8.jpg',
    8 => 'http://www.fbi.gov/wanted/fugitives/cei/mercer_f9.jpg',
    9 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/baez_v.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/baez_v.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/dominguez_d.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/dominguez_d.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/vazquez_f.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/vazquez_f1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/vazquez_f2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/ayele_b.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/ayele_b1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/ayele_b2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cei/ayele_b3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/ranjel_rb.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/ranjel_rb1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/ranjel_rb2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cei/ranjel_rb3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/cei/ranjel_rb4.jpg',
    4 => 'http://www.fbi.gov/wanted/fugitives/cei/ranjel_rb5.jpg',
    5 => 'http://www.fbi.gov/wanted/fugitives/cei/ranjel_rb6.jpg',
    6 => 'http://www.fbi.gov/wanted/fugitives/cei/ranjel_rb7.jpg',
    7 => 'http://www.fbi.gov/wanted/fugitives/cei/ranjel_rb8.jpg',
    8 => 'http://www.fbi.gov/wanted/fugitives/cei/ranjel_rb9.jpg',
    9 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/chavez_a.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/chavez_a1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/chavez_a2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cei/chavez_a3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/west_m.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/west_m1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/west_m2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/villareal_ic.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/villareal_ic.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/cambero_m.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/cambero_m1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/cambero_m2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cei/cambero_m3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/valencia_ma.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/valencia_ma.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/medina_m.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/medina_m.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/bolden_eo.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/bolden_eo.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/bolden_eo2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/rodriguez_c.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/rodriguez_c.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/costilla_j.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/costilla_j.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/robles_vg.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/robles_vg.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/lebaron_jt.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/lebaron_jt.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/lebaron_jt1.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cei/lebaron_jt2.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/perez-trujillo_ra.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/perez-trujillo_ra1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/perez-trujillo_ra2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/fleming_s.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/fleming_s1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/fleming_s2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cei/fleming_s3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/cei/fleming_s4.jpg',
    4 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/morales_lr.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/morales_lr.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/martinez-varela_sl.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/martinez-varela_sl.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/fuentes_vc.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/fuentes_vc1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/fuentes_vc2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/guzman_e.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/guzman_e.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/villareal_r.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/villareal_r.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/vega_od.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/vega_od.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/duran_jc.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/duran_jc1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/duran_jc2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cei/duran_garcia3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/vargas_a.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/vargas_a.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/garcia_d.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/garcia_d1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/garcia_d2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cei/duran_garcia3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/couto_lm.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/couto_lm98.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/couto_lm96.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/hicks_ec.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/hicks_ec1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/hicks_ec2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/ponzo_e.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/ponzo_e.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/ponzo_e2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/hu_j.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/hu_j2000.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/hu_j1997.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/cei/hu_j3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/cei/mcnally_t2004.jpg',
    4 => 'http://www.fbi.gov/wanted/fugitives/cei/mcnally_t1985.jpg',
    5 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/watkins_mo.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/watkins_mo.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/cei/wells_gb.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/cei/wells_gb.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/cei/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/wcc/nguyen_x.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/wcc/nguyen_x.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/wcc/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/wcc/amir_fb.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/wcc/amir_fb.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/wcc/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/wcc/eltamimi_mm.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/wcc/eltamimi_mm.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/wcc/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/wcc/cody_jd.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/wcc/cody_jd1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/wcc/cody_jd2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/wcc/cody_jd3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/wcc/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/wcc/grijalva_f.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/wcc/grijalva_.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/wcc/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/wcc/oliver_cj.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/wcc/oliver_cj4.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/wcc/oliver_cj1.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/wcc/oliver_cj2.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/wcc/oliver_cj3.jpg',
    4 => 'http://www.fbi.gov/wanted/fugitives/wcc/oliver_jl5.jpg',
    5 => 'http://www.fbi.gov/wanted/fugitives/wcc/oliver_jl4.jpg',
    6 => 'http://www.fbi.gov/wanted/fugitives/wcc/oliver_c_j5.jpg',
    7 => 'http://www.fbi.gov/wanted/fugitives/wcc/oliver_c_j6.jpg',
    8 => 'http://www.fbi.gov/wanted/fugitives/wcc/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/wcc/rubens_cg.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/wcc/rubens_cg.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/wcc/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/wcc/quinones_ja.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/wcc/quinones_ja.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/wcc/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/wcc/eberhart_js.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/wcc/eberhar_jst.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/wcc/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/wcc/porcaro_ja.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/wcc/porcaro_ja.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/wcc/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/wcc/garabet_b.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/wcc/garabet_b1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/wcc/garabet_b2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/wcc/garabet_b3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/wcc/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/wcc/moos_sg.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/wcc/moos_sg.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/wcc/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/wcc/voziianov_a.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/wcc/voziianov_a.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/wcc/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/wcc/malczewski_em.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/wcc/malczewski_em3.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/wcc/malczewski_em1.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/wcc/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/wcc/lunsford_ja.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/wcc/lunsford_ja1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/wcc/lunsford_ja2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/wcc/lunsford_ja3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/wcc/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/wcc/ricaforte_yt.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/wcc/ricaforte_yt1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/wcc/ricaforte_yt2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/wcc//wanted/images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/wcc/mccool_jw.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/wcc/mccool_jw1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/wcc/mccool_jw2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/wcc/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/wcc/reich_cy.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/wcc/reich_cy.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/wcc/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/wcc/duong_t.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/wcc/duong_t%20.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/wcc/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/wcc/ramey_lw.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/wcc/ramey_lw1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/wcc/ramey_lw2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/wcc/ramey_lw3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/wcc/ramey_lw4.jpg',
    4 => 'http://www.fbi.gov/wanted/fugitives/wcc/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/wcc/ballow_db.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/wcc/ballow_db1.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/wcc/ballow_db2.jpg',
    2 => 'http://www.fbi.gov/wanted/fugitives/wcc/ballow_db3.jpg',
    3 => 'http://www.fbi.gov/wanted/fugitives/wcc/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/wcc/karim_ns.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/wcc/karim_ns.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/wcc/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/wcc/haim_hb.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/wcc/haim_hb.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/wcc/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/wcc/monem_f.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/wcc/monem_f.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/wcc/../../images/mullersig.gif',
  ),
  'http://www.fbi.gov/wanted/fugitives/wcc/okuomose_or.htm' => 
  array (
    0 => 'http://www.fbi.gov/wanted/fugitives/wcc/okuomose_or.jpg',
    1 => 'http://www.fbi.gov/wanted/fugitives/wcc/../../images/mullersig.gif',
  ),
);
        
        $firstimages = array();
        
        foreach ($images as $url => $set) {
            
            // Don't use Bin Laden twice
            if ($url == 'http://www.fbi.gov/wanted/terrorists/terbinladen.htm') continue;
            
            if (count($set) > 0) {
                $firstimages[] = array(
                    'img' => $set[0],
                    'page' => $url
                );
            }
        }
        
        shuffle($firstimages);

        $firstimages = array_slice($firstimages, 0, 12);

        $firstimages = array_merge($firstimages, $firstimages);

        shuffle($firstimages);

        $this->images = $firstimages;

    }

}