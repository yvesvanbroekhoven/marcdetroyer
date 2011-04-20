<div id="contact" class="item ">
  <div id="about-content">
    <div class="left">
      <h2>Contact me</h2>
      <a href="#">marc.detroyer@skynet.be</a>
      <p>Tel: 0474/00.00.00</p> 
      <img src="/stylesheets/img/por.png" alt="por" id="portret" width="160" height="167" />
    </div>
    
    <? $this->load->helper('form'); ?>
    <form action="/contact/send" class="clearfix" method="post">
      <h2>Send me a message</h2>
      <p><?= validation_errors(); ?></p>
      <p>
        <label for="">Name:</label>
        <?= form_input(array("name" => "contact[name]", "type" => "text")); ?>
      </p>
      <p>
        <label for="">E-mail address:</label>
        <?= form_input(array("name" => "contact[email]", "type" => "text")); ?>
      </p>
      <p>
        <label for="">Telephone number:</label>
        <?= form_input(array("name" => "contact[tel]", "type" => "text")); ?>
      </p>
      <p>
        <label for="">Question:</label>
        <?= form_textarea(array("name" => "contact[question]")); ?>
      </p>
      <?= form_submit(array("value" => "send", "id" => "submit")) ?>
    </form>
    <div class="clear"></div>
  </div>
</div><!-- /#contact -->