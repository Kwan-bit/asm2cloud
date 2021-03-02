
<html>
<head>
    <link rel="stylesheet" href ="styles.css">
    <title> Login </title>
    <marquee bgcolor="gray" 
             scrollamount="12" 
             direction="left" 
             onmouseover="this.stop();" 
             onmouseout="this.start();">
        [nah/nah/nah]: nah
    </marquee>
    <ul> 
        <li> <a href="index.php">Main Page</a></li>
        <li> <a href="login.php">Login </a></li>       
    </ul>
  </head>
    <body>
    <div class="container">
      <img src="../static/image.png" class="image" />
      <form action="/submit" method="POST">
        <div class="form-group">
          <h3>Customer Name</h3>
          <input
            type="text"
            name="customer"
            placeholder="Full name of customer"
          />
        </div>
        <div class="form-group">
          <h3>order</h3>
          <select name="order">
            <option value="">Select goods</option>
            <option value="Oak wood table">Oak wood table</option>
            <option value="Bookcases">Bookcases</option>
            <option value="Settees">Settees</option>
            <option value="Leather sofa">Leather sofa</option>
          </select>
        </div>
        <div class="form-group">
          <h3>Please chose your order size</h3>
          <p></p><input type="radio" name="size" value="1" /> 60x38 (sofa)</p>
          <p></p><input type="radio" name="size" value="2" /> 42x40 (sofa)</p>
          <p></p><input type="radio" name="size" value="3" /> 108x38 and 78x36 (sofa)</p>
          <p></p><input type="radio" name="size" value="4" /> 84x36 (sofa)</p>
          <p></p><input type="radio" name="size" value="5" /> 72x40 (table)</p>
          <p></p><input type="radio" name="size" value="6" /> 42x24 (table)</p>
          <p></p><input type="radio" name="size" value="7" checked /> 50x62 (bookcases)</p>
          <img src="../static/image2.png" class="image2" style="width:462px;height:305px;"/>
        </div>
        <div class="form-group">
          <h3>Customer note:</h3>
          <textarea
            name="comments"
            id=""
            cols="30"
            rows="10"
            placeholder="Tell us if you have any specific order for your order:"
          ></textarea>
        </div>
        <input type="submit" value="Submit" class="btn" />
      </form>
    </div>
  </body>
</html>
