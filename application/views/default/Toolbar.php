

      	<div class="toolbar">
            <?php if($this->uri->uri_string() == 'vehicle'){ ?>
                <a href="vehicle/register" class="myButton">Add Vehicle</a>
			<?php }?>    
            <?php if($this->uri->uri_string() == 'driver'){ ?>
				<a href="driver/register" class="myButton">Add Driver</a>
            <?php }?> 
            <?php if($this->uri->uri_string() == 'vehicle/register'){ ?>
				<a href="vehicle" class="myButton">Save Vehicle</a>
                <a href="vehicle" class="myButton">Cancel</a>
            <?php }?> 
            <?php if($this->uri->uri_string() == 'driver/register'){ ?>
            	<a href="driver" class="myButton">Save Driver</a>
				<a href="driver" class="myButton">Cancel</a>
            <?php }?> 
        </div>