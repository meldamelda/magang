		<ol class="breadcrumb">
			<?php foreach ($this->uri->segments as $segment): ?>
				<?php 
					$url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
					$is_active = $url == $this->uri->uri_string;
				?>
        	<li class="breadcrumb-item <?php echo $is_active ? 'active': '' ?>">
        		<?php if($is_active):     
                    $segment = str_replace("_", " ", $segment);           
                    echo ucwords($segment); ?>
        		<?php else: 
                    $segment = str_replace("_", " ", $segment);
                ?>
        			<a href="<?php echo site_url($url) ?>"><?php echo ucwords($segment) ?></a>
        		<?php endif; ?>
        	</li>
        	<?php endforeach; ?>
        </ol>
