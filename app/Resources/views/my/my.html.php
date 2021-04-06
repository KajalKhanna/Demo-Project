
<?php
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */

$this->extend('layout.html.php');

?>

<head> 
<style>

.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

.row {margin: 0 -5px;}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  margin-left: 50px;
  padding: 0 8px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
 padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  max-width: 300px;
  margin: auto;
  float: left;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: 10px black;
  outline: 0;
  padding: 20px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
</head>



    <?php 
    if($this->editmode):
       
    else: ?>

    
        <?php
            $prod = new \Pimcore\Model\DataObject\Demo\Listing();

       
        ?>
        
       <?php
        foreach($prod as $product) 
        {
  
            ?>       
      
           <?php
 

            $picture = $product->getImage();
              if($picture instanceof \Pimcore\Model\Asset\Image):

            /** @var \Pimcore\Model\Asset\Image $Image */
            ?><div class="row">
  		<div class="column">
        		  <div class="card">
         		 <div class="container">
		      
			<h1>  <?=$product->getName(); ?> </h1>
		       <p>    ID: <?=$product->getSku(); ?> </p>
			<p>  <?=$product->getWeight(); ?> </p>
			    
      

		       <?= $picture->getThumbnail()->getHtml(["width" => 100,"height" => 100])?>
			  <div class="price">    <?=$product->getPrice(); ?></div>
			  <p>Some text.....................</p>
			  <p><button onclick="location.href = 'http://project.local/detail';">View</button></p>
		   </div>  </div> </div>
          <?php endif;
            
            ?>
            
    
        <?php
     } 
     ?>  
    
   
    <?php endif; ?>
      </div></div></div>

