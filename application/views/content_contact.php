<div id="contact">
        <?php 

         foreach ($results as $row) {
              $title = $row->title;
              $text1 = $row->text1;
              $text2 = $row->text2;
            } 
           
          $this->load->helper("form");

          echo $message;
          echo validation_errors();


          echo form_open("site/send_email");

          echo form_label("Enter your Name: ","fullName");
            $data = array(
            "name"=>"fullName",
            "id"=>"fullName",
            "value"=>set_value("fullName")
          );
          echo form_input($data);

          echo form_label("Enter your Email : ","email");
            $data = array(
            "name"=>"email",
            "id"=>"email",
            "value"=>set_value("email")
          );
          echo form_input($data);

          echo form_label("Enter your Message: ","message");
          $data = array(
            "name"=>"message",
            "id"=>"message",
            "value"=>set_value("message")
          );
          echo form_textarea($data);

          echo form_submit("contactSubmit","Send!");

          echo form_close();

        ?>
        
</div>