<!DOCTYPE html>

<html>
<?php include_once('head.php'); ?>

<body>
  <header>
    <!-- navbar -->
    <?php include_once('navbar.php'); ?>
  </header>
  <main style="@import url('https://fonts.googleapis.com/css2?family=Work+Sans&display=swap'); background: url('./images/background.jpg')" class="white-text">

    <h1 class="center-align">Orders</h1>


    <form class="center-align" name="form1" id="form1" action="/action_page.php">
      Colors: <select class="input-field col s10 black-text" name="color" id="color" style="width:auto; display:inline-block;">
        <option value="" selected="selected">Select Color</option>
      </select>
      <br><br>
      Sizes: <select class="input-field col s10 black-text" name="size" id="size" style="width:auto; display:inline-block">
        <option value="" selected="selected">Please select color first</option>
      </select>
      <br><br>
      Chapters: <select class="input-field col s10 black-text" name="chapter" id="chapter" style="width:auto; display:inline-block">
        <option value="" selected="selected">Please select size first</option>
      </select>
      <br><br>
      <input class="black-text" type="submit" value="Submit">
    </form>



  </main>
  <footer>
    <?php include_once('footer.php'); ?>
  </footer>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript>
    
  </script>
</body>

</html>