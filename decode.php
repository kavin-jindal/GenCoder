
<?php 
$success = false;
$output = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    
  // dropdown
    $select = $_POST['selects'];
    if ($select == "Base64"){
        $message = $_POST['message'];
        $output = base64_decode($message);
        $success = true;
    
    }
    if ($select == "ROT 13"){
        $message = $_POST['message'];
        $output = str_rot13($message);
        $success = true;
    }
    if ($select == "UUEncode"){
        $message = $_POST['message'];
        $output = convert_uudecode($message);
        $success = true;
    }
    if ($select == "URL"){
        $message = $_POST['message'];
        $output = urldecode($message);
        $success = true;
    }
    if ($select == "UTF-8"){
      $message = $_POST['message'];
      $output = utf8_decode($message);
      $success = true;
  }
  if ($select == "MD5"){
    $message = $_POST["message"];
    $output = md5($message, TRUE);
    
  }

  
  
}
?>
<!DOCTYPE html>
<?php include("partials/_navd.php");?>
    <section class="u-clearfix u-palette-3-base u-section-1" id="sec-4316">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-align-center-xs u-custom-font u-hover-feature u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-1">Welcome to GenCoder!</h1>
        <h1 class="u-align-center u-custom-font u-hover-feature u-text u-text-2">Your one stop solution to encode and decode data with ease!</h1>
        <div class="u-form u-form-1">
          
        <form method="post" action="decode.php" class="u-clearfix u-form-spacing-10" name="form" style="padding: 10px;">
            <div class="u-form-group u-form-message u-label-none">
              <label for="message-0059" class="u-label">Message</label>
              <textarea method="post" placeholder="  Type here" rows="4" cols="50" id="message" name="message" class="u-border-black u-custom-font u-input u-input-rectangle u-none u-radius-37 u-input-1" required=""></textarea>
            </div>
            <br>
            <div class="u-form-group u-form-select u-label-none u-form-group-2">
              <div class="u-form-select-wrapper">
                <select method="post" id="selects" name="selects" class="u-border-black u-custom-font u-input u-input-rectangle u-none u-radius-37 u-input-2">
                  <option value="Base64" data-calc="Base64">Base64</option>
                  <option value="MD5" data-calc="MD5">MD5</option>

                  <option value="ROT 13" data-calc="ROT 13">ROT 13</option>
                  <option value="UUEncode" data-calc="UUEncode">UUEncode</option>

                  <option data-calc="URL" value="URL">URL</option>
                  <option value="UTF-8" data-calc="UUEncode">UTF-8</option>

                </select>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
              </div>
            </div>
            <div class="u-align-center u-form-group u-form-submit u-label-none">
              <center>
              <input type="submit" class="u-black u-border-none u-btn u-btn-round u-button-style u-radius-50 u-text-palette-3-base u-btn-1" method="post" value="Decode">
              </center>
            </div>
            
            
              <textarea placeholder="  Output will show up here" rows="4" cols="50" id="output" name="output" class="u-border-black u-custom-font u-input u-input-rectangle u-none u-radius-37 u-input-3"><?php echo $output ?></textarea>
            
        </form>
        </div>
        
      </div>
      
      
    </section>
    
    
    
    <?php 
    include("partials/_foot.php");
    ?>
  
</body></html>