<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
// Load form helper library
        $this->load->helper('form');
// Load form validation library
        $this->load->library('form_validation');
// Load session library
        $this->load->library('session');
// Load string
        $this->load->helper('url');
// Load security
        $this->load->helper('security');
    }

    public function index() {
        $this->load->view('head-foot/header');
        $this->load->view('Dashboard');
        $this->load->view('head-foot/footer');
    }

    public function home() {
        $this->load->view('home');
    }

    public function sendemail() {
     
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];
             
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'soffiyan.pathan@gmail.com', // change it to yours
            'smtp_pass' => '7899676739', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $message = '';
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from($email,$name); // change it to yours
        $this->email->to('suffiyan@spheretravelmedia.com');// change it to yours
        $this->email->subject('Sphere Travel Media Enquiry');
        $this->email->message($msg);
        if($this->email->send())
        {
            echo "<script>window.location.href='http://iitmindia.com/spheretravelmedia/home';</script>";
        }
            else
        {
            show_error($this->email->print_debugger());
        }
    }
    
        public function get_maharastra() {
        ?>
        <section class="pt100 pb100" id="cp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_title" style="text-align: center">
                            <h3 class="" style="font-family: 'Roboto', sans-serif;font-size: 45px;width: 100%; text-align: center; content: " "; position: absolute; border-top: solid 3px #f50136; left: 0; top: 0;">
                                Maharashtra International Travel Mart
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section class="pt100 pb100">
            <div class="container">
                <div class="row" id="his">
                    <div class="col-md-6" style="border:1px solid black;padding: 14px 22px 14px 14px;">
                        <h3 class="title" style="font-family: 'Roboto', sans-serif;font-size: 31px;width: 100%;">
                            Maharashtra International Travel Mart
                        </h3>
                        <p style="color: black;text-align: justify;font-family: 'Roboto', sans-serif;font-size: 14px;">Maharashtra International Travel Mart (MITM) 2015 marked the launch of the state’s largest trade exchange dedicated to the travel and tourism industry, with exceptional emphasis on bringing suppliers with first-rate credentials face-to-face with premium buyers so as to establish and encourage new business relationships while furnishing the highest quality/price ratio and innovative packages and products. The event was a one-of-a-kind platform bringing together the who’s who of the travel trade industry including providers of travel products and services, travel agents, tour operators, hoteliers, travel trade associations, local ground service suppliers, to name a few. With excellent connectivity to and throughout the state, vivid heritage and natural attractions, diverse cuisine and its capital, Mumbai being the financial hub of the country, MITM 2015 will catapult Maharashtra’s tourism appeal across a much wider global audience.</p>
                    </div>
                    <div class="col-md-6" style="padding-left: 0px!important">
                        <img src="<?php echo base_url() . "assets/"; ?>img/bg/mitm1.jpg">
                    </div>
                </div>
            </div>
        </section>
        <?php
    }

    public function get_gitm() {
        ?>
        <section class="pt100 pb100" id="cp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_title" style="text-align: center">
                            <h3 class="" style="font-family: 'Roboto', sans-serif;font-size: 45px;width: 100%; text-align: center; content: " "; position: absolute; border-top: solid 3px #f50136; left: 0; top: 0;">
                                Goa International Travel Mart
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section class="pt100 pb100">
            <div class="container">
                <div class="row" id="his">
                    <div class="col-md-6" style="border:1px solid black;padding: 14px 22px 14px 14px;">
                        <h3 class="title" style="font-family: 'Roboto', sans-serif;font-size: 31px;width: 100%;">
                            Goa International Travel Mart
                        </h3>
                        <p style="color: black;text-align: justify;font-family: 'Roboto', sans-serif;font-size: 14px;">The whole concept of the Goa International Travel Mart is to showcase Goa as a travel destination. GITM aims at stimulating travel, tourism, hospitality, leisure, and other related industries, both from within the country and outside. Goa International Travel Mart 2014 strives to bring about a face-to-face interaction of the travel-trade, hoteliers, and other stake holders from Goa with leading travel agents from India and abroad.
                            The international travel and trade mart held last year was a phenomenal success. We are confident that an event like GITM which is being organized on such a scale will boost trade and result in increased visitors to the state to experience our unique
                            culture.</p>
                    </div>
                    <div class="col-md-6" style="padding-left: 0px!important">
                        <img src="<?php echo base_url() . "assets/"; ?>img/bg/gitm.jpg">
                    </div>
                </div>
            </div>
        </section>
        <?php
    }

    public function get_guj() {
        ?>
        <section class="pt100 pb100" id="cp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_title" style="text-align: center">
                            <h3 class="" style="font-family: 'Roboto', sans-serif;font-size: 45px;width: 100%; text-align: center; content: " "; position: absolute; border-top: solid 3px #f50136; left: 0; top: 0;">
                                Gujarat Travel Mart
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section class="pt100 pb100">
            <div class="container">
                <div class="row" id="his">
                    <div class="col-md-6" style="border:1px solid black;padding: 14px 22px 14px 14px;">
                        <h3 class="title" style="font-family: 'Roboto', sans-serif;font-size: 31px;width: 100%;">
                            Gujarat Travel Mart
                        </h3>
                        <p style="color: black;text-align: justify;font-family: 'Roboto', sans-serif;font-size: 14px;">A showcase for stimulating travel, tourism, hospitality, leisure and other related industries, both from within the country and outside. ‘Gujarat Travel Mart’ is aimed at bringing about a face – to – face encounter with the travel – trade, hoteliers, and other stake holders from India and abroad.</p>
                    </div>
                    <div class="col-md-6" style="padding-left: 0px!important">
                        <img src="<?php echo base_url() . "assets/"; ?>img/bg/gtm.jpg">
                    </div>
                </div>
            </div>
        </section>
        <?php
    }

    function get_mad() {
        ?>
        <section class="pt100 pb100" id="cp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_title" style="text-align: center">
                            <h3 class="" style="font-family: 'Roboto', sans-serif;font-size: 45px;width: 100%; text-align: center; content: " "; position: absolute; border-top: solid 3px #f50136; left: 0; top: 0;">
                                Madhya Pradesh Travel Mart
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section class="pt100 pb100">
            <div class="container">
                <div class="row" id="his">
                    <div class="col-md-6" style="border:1px solid black;padding: 14px 22px 14px 14px;">
                        <h3 class="title" style="font-family: 'Roboto', sans-serif;font-size: 31px;width: 100%;">
                            Madhya Pradesh Travel Mart
                        </h3>
                        <p style="color: black;text-align: justify;font-family: 'Roboto', sans-serif;font-size: 14px;">
                            The Madhya Pradesh Travel Mart’ spread over two days will showcase the tourism attractions of the state that would lead to an enhanced brand image as a destination. ‘Destination Madhya Pradesh’ will get together all stake-holders of the tourism industry in the state such as hoteliers, travel agents & tour operators, adventure tour operators, tourism districts, handicrafts and handlooms, cuisine, etc
                        </p>
                    </div>
                    <div class="col-md-6" style="padding-left: 0px!important">
                        <img src="<?php echo base_url() . "assets/"; ?>img/bg/mptm.jpg">
                    </div>
                </div>
            </div>
        </section>
        <?php
    }

    function get_him() {
        ?>
        <section class="pt100 pb100" id="cp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_title" style="text-align: center">
                            <h3 class="" style="font-family: 'Roboto', sans-serif;font-size: 45px;width: 100%; text-align: center; content: " "; position: absolute; border-top: solid 3px #f50136; left: 0; top: 0;">
                                Himachal Travel Mart
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section class="pt100 pb100">
            <div class="container">
                <div class="row" id="his">
                    <div class="col-md-6" style="border:1px solid black;padding: 14px 22px 14px 14px;">
                        <h3 class="title" style="font-family: 'Roboto', sans-serif;font-size: 31px;width: 100%;">
                            Himachal Travel Mart
                        </h3>
                        <p style="color: black;text-align: justify;font-family: 'Roboto', sans-serif;font-size: 14px;">
                            The inaugural edition of ‘Himachal Travel Mart’ 2016 was organised from 22 – 24 April in Shimla at the Ridge. The three-day event brought together 30 Exhibitors from Himachal Pradesh from over 10 diverse segments such as adventure, hospitality, leisure, etc. to meet and do business with more than 65 Hosted Buyers and Media from throughout India and abroad.<br>
                            Located in the prime tourist hub of the hill station, Himachal Travel Mart invited national buyers and media from across various cities in India. International hosted buyers and media were flown in from countries including Australia, Dubai, France, Germany, Nepal, Sri Lanka, Ukraine, United Kingdom and the United States of America.
                        </p>
                    </div>
                    <div class="col-md-6" style="padding-left: 0px!important">
                        <img src="<?php echo base_url() . "assets/"; ?>img/bg/hptm1.jpg">
                    </div>
                </div>
            </div>
        </section>
        <?php
    }

    function get_iitm() {
        ?>
        <section class="pt100 pb100" id="cp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_title" style="text-align: center">
                            <h3 class="" style="font-family: 'Roboto', sans-serif;font-size: 45px;width: 100%; text-align: center; content: " "; position: absolute; border-top: solid 3px #f50136; left: 0; top: 0;">
                                India International Travel Mart
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section class="pt100 pb100">
            <div class="container">
                <div class="row" id="his">
                    <div class="col-md-6" style="border:1px solid black;padding: 14px 22px 14px 14px;">
                        <h3 class="title" style="font-family: 'Roboto', sans-serif;font-size: 31px;width: 100%;">
                            India International Travel Mart
                        </h3>
                        <p style="color: black;text-align: justify;font-family: 'Roboto', sans-serif;font-size: 14px;">
                            India’s premier Exhibition that showcases of travel, tourism, hospitality, leisure and other related industries. It is aimed at bringing the Industry, face-to-face with the travel trade, Corporate Buyer and the end-customer with the requisite purchasing power. All this in a comfortable and festive ambience that will help forge a mutually beneficial business relationship. You just cannot afford to miss out on this great opportunity to rub shoulders with the crème de la crème of the industry and travel enthusiasts. A rendezvous that will leave an impact on the mind of every visitor and potential traveller.
                        </p>
                    </div>
                    <div class="col-md-6" style="padding-left: 0px!important">
                        <img src="<?php echo base_url() . "assets/"; ?>img/bg/iitm.jpg">
                    </div>
                </div>
            </div>
        </section>
        <?php
    }

    function get_otr() {
        ?>
        <section class="pt100 pb100" id="cp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_title" style="text-align: center">
                            <h3 class="" style="font-family: 'Roboto', sans-serif;font-size: 45px;width: 100%; text-align: center; content: " "; position: absolute; border-top: solid 3px #f50136; left: 0; top: 0;">
                                Outbound Travel Roadshow
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section class="pt100 pb100">
            <div class="container">
                <div class="row" id="his">
                    <div class="col-md-6" style="border:1px solid black;padding: 14px 22px 14px 14px;">
                        <h3 class="title" style="font-family: 'Roboto', sans-serif;font-size: 31px;width: 100%;">
                            Outbound Travel Roadshow
                        </h3>
                        <p style="color: black;text-align: justify;font-family: 'Roboto', sans-serif;font-size: 14px;">
                            India’s first ever multi city multi destination Roadshow aimed to provide a ‘One Stop Travel Shop’ to the key buyers of the Indian Travel Trade under one roof, in the major business and commercial metros of India.<br>
                            OTR enables those who already work in the Indian Market to reach their existing partners in the most cost effective and time efficient manner and for new participants, it is the perfect opportunity to gain an understanding and entrée into the Indian market, in the most economical and structured manner.
                        </p>
                    </div>
                    <div class="col-md-6" style="padding-left: 0px!important">
                        <img src="<?php echo base_url() . "assets/"; ?>img/bg/otr.jpg">
                    </div>
                </div>
            </div>
        </section>
        <?php
    }

    function btm() {
        ?>
        <section class="pt100 pb100" id="cp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_title" style="text-align: center">
                            <h3 class="" style="font-family: 'Roboto', sans-serif;font-size: 45px;width: 100%; text-align: center; content: " "; position: absolute; border-top: solid 3px #f50136; left: 0; top: 0;">
                                Business Travel Mice Expo
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section class="pt100 pb100">
            <div class="container">
                <div class="row" id="his">
                    <div class="col-md-6" style="border:1px solid black;padding: 14px 22px 14px 14px;">
                        <h3 class="title" style="font-family: 'Roboto', sans-serif;font-size: 31px;width: 100%;">
                            Business Travel Mice Expo
                        </h3>
                        <p style="color: black;text-align: justify;font-family: 'Roboto', sans-serif;font-size: 14px;">
                            BTME showcases the best Indian and  International Destinations, Products and Services all under one roof and is the leading event in this part of the World.s
                        </p>
                    </div>
                    <div class="col-md-6" style="padding-left: 0px!important">
                        <img src="<?php echo base_url() . "assets/"; ?>img/bg/btm.jpg">
                    </div>
                </div>
            </div>
        </section>
        <?php
    }

    function vw() {
        ?>
        <section class="pt100 pb100" id="cp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_title" style="text-align: center">
                            <h3 class="" style="font-family: 'Roboto', sans-serif;font-size: 45px;width: 100%; text-align: center; content: " "; position: absolute; border-top: solid 3px #f50136; left: 0; top: 0;">
                                Voyagers World
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section class="pt100 pb100">
            <div class="container">
                <div class="row" id="his">
                    <div class="col-md-6" style="border:1px solid black;padding: 14px 22px 14px 14px;">
                        <h3 class="title" style="font-family: 'Roboto', sans-serif;font-size: 31px;width: 100%;">
                            Voyagers World
                        </h3>
                        <p style="color: black;text-align: justify;font-family: 'Roboto', sans-serif;font-size: 14px;">
                            Voyager’s World is a premium travel trade magazine published from Bangalore – India. The magazine has been in publication for the last one decade, keeping the pulse on the Indian travel, hospitality and aviation industry.<br>
                            With a circulation of 25,000 and growing, the magazine has been keenly read by the key personalities and officials in the travel, hospitality and aviation industry.<br>
                            Voyager’s World has been visible at world’s leading travel exhibitions such as WTM, ITB Berlin, ATM, etc and it has won accolades and appreciations from the travel industry for its authentic and extensive coverage on the changing world of travel industry.
                        </p>
                    </div>
                    <div class="col-md-6" style="padding-left: 0px!important">
                        <img src="<?php echo base_url() . "assets/"; ?>img/bg/vw.jpg">
                    </div>
                </div>
            </div>
        </section>
        <?php
    }

    function ds() {
        ?>
        <section class="pt100 pb100" id="cp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_title" style="text-align: center">
                            <h3 class="" style="font-family: 'Roboto', sans-serif;font-size: 45px;width: 100%; text-align: center; content: " "; position: absolute; border-top: solid 3px #f50136; left: 0; top: 0;">
                                Designs Sphere
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section class="pt100 pb100">
            <div class="container">
                <div class="row" id="his">
                    <div class="col-md-6" style="border:1px solid black;padding: 14px 22px 14px 14px;">
                        <h3 class="title" style="font-family: 'Roboto', sans-serif;font-size: 31px;width: 100%;">
                            Designs Sphere
                        </h3>
                        <p style="color: black;text-align: justify;font-family: 'Roboto', sans-serif;font-size: 14px;">
                            Designs Sphere is headquartered in Delhi, India and multiple strategic locations spanning continents and time zones. Brand managers around the world trust Designs Sphere to design and create exceptional trade show exhibits that communicate their message and build their brand. Companies from accross the globe depend on us for design excellence and the expertise and exhibit resources they need to effectively bring their brands to market.
                        </p>
                    </div>
                    <div class="col-md-6" style="padding-left: 0px!important">
                        <img src="<?php echo base_url() . "assets/"; ?>img/bg/ds.jpg">
                    </div>
                </div>
            </div>
        </section>
        <?php
    }

    function sd() {
        ?>
        
        <section class="pt100 pb100" id="cp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_title" style="text-align: center">
                            <h3 class="" style="font-family: 'Roboto', sans-serif;font-size: 45px;width: 100%; text-align: center; content: " "; position: absolute; border-top: solid 3px #f50136; left: 0; top: 0;">
                                Sphere Digital
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section class="pt100 pb100">
            <div class="container">
                <div class="row" id="his">
                    <div class="col-md-12" style="border:1px solid black;padding: 14px 22px 14px 14px;">
                        <h3 class="title" style="font-family: 'Roboto', sans-serif;font-size: 31px;width: 100%;">
                            WHY SPHERE DIGITAL?
                        </h3>
                        <p style="color: black;text-align: justify;font-family: 'Roboto', sans-serif;font-size: 14px;">
                           Our employees have high degree of expertise in latest trends especially Google's algorithm updates with high adaptability We understand your business and deliver solutions/results according to your business need rather than selling our services/packages We are 100% transparent in process and reporting We strictly adhere to Google's algorithm and apply only white hat techniques in our SEO process
<br><br>We always understand service after sales is very important. Hence, we keep regular communication with our Clients to ensure clients are happy with our service and support

                        </p>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
    
    function er(){
        ?>
        
        <section class="pt100 pb100" id="cp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_title" style="text-align: center">
                            <h3 class="" style="font-family: 'Roboto', sans-serif;font-size: 45px;width: 100%; text-align: center; content: " "; position: absolute; border-top: solid 3px #f50136; left: 0; top: 0;">
                                Earth Routes
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section class="pt100 pb100">
            <div class="container">
                <div class="row" id="his">
                    <div class="col-md-12" style="border:1px solid black;padding: 14px 22px 14px 14px;">
                        <h3 class="title" style="font-family: 'Roboto', sans-serif;font-size: 31px;width: 100%;">
                           About us
                        </h3>
                        <p style="color: black;text-align: justify;font-family: 'Roboto', sans-serif;font-size: 14px;">
                          We believe the world needs to redefine success in business beyond profit. We’re a cross-functional and diverse team, working together to deliver meaningful, relevant and impactful solutions for the Complete Brand Management of your organization. We work as your extended arm in creating/enhancing the Brand that defines your organizational goals in the best manner. Our team is a dynamic fusion of personalities and creative energies that work in synergy to present inspiration with consistent creative brilliance. Our full service agency has the in house skills and experience to take your Brand further in your target markets in both the physical and digital worlds.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }

    function get_jk() {
        ?>
        <?php
    }

    function get_bengal() {
        ?>


        <?php
    }

    function aboutus() {
        ?>
        <section class="pt100 pb100" id="cp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-12">

                    </div>
                    <div class="col-md-6 col-12">
                        <div class="section_title" style="text-align: center">
                            <h3 class="title" style="font-family: 'Roboto', sans-serif;font-size: 45px;width: 100%; text-align: center; content: " "; position: absolute; border-top: solid 3px #f50136; left: 0; top: 0;">
                                What We Do
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section class="pt100 pb100">
            <div class="container-fluid">
                <div class="row" style="margin-left: 0px!important;">
                    <div class="col-md-6">
                        <img src="<?php echo base_url() . "assets/"; ?>img/bg/aboutus.jpg">
                    </div>
                    <div class="col-md-6">
                        t-family: 'Roboto', sans-serif;font-size: 45px;width: 100%; text-align: center; content: " "; position: absolute; border-top: solid 3px #f50136; left: 0; top: 0;">

                        <h3 class="title" style="font-family: 'Roboto', sans-serif;font-size: 28px;width: 100%;">
                            What We Do
                        </h3>
                        <p style="color: black;text-align: justify;font-family: 'Roboto', sans-serif;font-size: 14px;">
                            Help create destinations and add value to their marketing efforts.<br><br>
                            Conceptualize Marketing elements to enhance marketability, brand- building, etc. We help putting destinations on the map in the Indian market.<br><br>
                            Provide market – entry opportunities for tourism products such as destinations, attractions, hospitality products, in both B2B & B2C space.<br><br>
                            We help create cost-effective platforms to bring travel service providers face-to- face with travel agents from across the world to forge mutually beneficial networks.
                        </p>
                        <p style="color: black;text-align: justify;font-family: 'Roboto', sans-serif;font-size: 16px;">

                            We have the distinction of being <span style="color:red">‘the only private event management company in India to organize bespoke International Travel marts for various State Tourism Boards’.</span>

                        </p>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }

}
