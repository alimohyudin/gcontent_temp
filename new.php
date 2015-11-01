<?php
	include("xml_to_html.php");
?>
<?php
	echo '<item>
		<title>'.$_GET['keywords'].'</title>
		<dc:creator><![CDATA[mikulabc]]></dc:creator>
		<content:encoded><![CDATA[
	
	';
?>
  <h2>What did you want us to find?</h2>

  <div class="panel-body">
    Look below, and please <b><a href="/contact/">leave us a message</a></b> if we could not be Helpful, we will try to Answer any Unanswered Questions. <br>
	<b>We will Help you</b>, everything is possible. <small>There are around %resultCount% Results, it took %searchResultTime% Seconds to load</small>
  </div>

      <h2>Sites writing about it</h2>
	  
	  <div class="col-md-12"><!-- START DUPLICATE ("visibleUrl") -->
		<?php
			getVisibleUrls();
		?>
	  <!-- END DUPLICATE ("visibleUrl") -->
	 </div>

	  <div class="clearfix"></div>
      <h2>Rich Snippet Collection</h2>
	  
      <h3>Articles <span class="label label-success">Section</span> <span class="label label-warning">Genre</span> <span class="label label-info">Audience</span> <span class="label label-danger">Title</span> <span class="label label-default">Topic</span></h3>
  <div class="col-xs-12">
    <div class="row">
	<div class="col-md-6">
        <div class="row">
          <div id="PanelsOne" class="col-md-13"> 
				  <?php
					$panel2Articles = getArticles();
				  ?>
			</div>
        </div>
      </div>
	  <div class="col-md-6">
        <div class="row">
          <div id="PanelsTwo" class="col-md-12"> 
		    <!-- START DUPLICATE ("article") 222divide amount of "panel"s evenly between ID "PanelsOne" & "PanelsTwo" -->
					<?php
							echo $panel2Articles;
					?>
			<!-- END DUPLICATE ("article") -->
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="clearfix"></div>
  <h2>Creative Work from People &amp; Organisations</h2>
  
  <!-- START DUPLICATE ("creativework") -->
  <?php
	getCreativework();
  ?>
  <!-- END DUPLICATE ("creativework") -->
  
  <div class="clearfix"></div>
  <h3>Comments from People</h3>

  <div class="row">
    <!-- START DUPLICATE ("comment") -->
	<?php
		getComment();
	?>
	<!-- END DUPLICATE ("comment") -->
  </div>

  <div class="clearfix"></div>
  <h2>Products &amp; Reviews</h2>
  
  <!-- START DUPLICATE ("product","organization","offer") -->
  <?php
		getProductOrganizationOffer();
	?>
  
  <!-- END DUPLICATE ("product","organization","offer") -->

  <div class="clearfix"></div>
  <h3>Reviews <small>by Awesome People<!-- START DUPLICATE ("person") --><?php
			getPersonName();
		?><!-- END DUPLICATE ("person") --></small></h3>

  <ul class="list-group">
    <!-- NEW START -->
    <!-- START DUPLICATE ("review") ARRAY -->
		<?php
			getReview();
			?>
	<!-- END DUPLICATE ("review") ARRAY -->
<!-- NEW END -->
  </ul>

  <div class="clearfix"></div>
  <h2>META Collections</h2>

  <h3>Social Media <span class="label label-success">General</span> <span class="label label-danger">Pinterest</span> <span class="label label-primary">Facebook</span> <span class="label label-info">Twitter</span> <span class="label label-warning">Other</span></h3>

  <!-- BEGIN - OVERRIDE STYLE FOR TABLE -->
  <style> 
	td.SocialMediaTD {
	  text-overflow: ellipsis;
	  overflow: hidden;
	  white-space: nowrap;
	}
  </style>
  <!-- END - OVERRIDE STYLE FOR TABLE -->
  
  <div class="col-md-6">
	<div class="row">
	  <div id="MetaOne" class="col-md-13">
	    <!-- START DUPLICATE ("metatags") divide amount of "panel"s evenly between ID "MetaOne" & "MetaTwo" -->
			<?php
				$metatags2 = getMetatags();
			?>
	    <!-- END DUPLICATE ("metatags") -->
	  </div>
	</div>
  </div>
  <div class="col-md-6">
	<div class="row">
	  <div id="MetaTwo" class="col-md-12">
	    <!-- START DUPLICATE ("metatags") divide amount of "panel"s evenly between ID "MetaOne" & "MetaTwo" -->
		<?php
				if(isset($metatags2->real_data))
					echo $metatags2->real_data;
			?>
	    <!-- END DUPLICATE ("metatags") --> 
	  </div>
	</div>
  </div>

  <div class="clearfix"></div>
  <h2>Breadcrumbs</h2>

  <div class="row">
	<div class="col-xs-12">
	  <!-- START DUPLICATE ("breadcrumb") -->
	  <ol class="breadcrumb">
		  <?php
				getBreadcrumb();
		  ?>
	  </ol>
	  <!-- START DUPLICATE ("breadcrumb") -->
	</div>
  </div>

  <div class="clearfix"></div>
  <h2>Uncategorized Information</h2>

  <div class="row">
	<div class="col-xs-12">
	  <div class="col-md-4">
		<!-- START DUPLICATE ("item") -->
		<div class="page-header">
			<?php
				getItem();
			?>
		</div>
		<!-- END DUPLICATE ("item") -->
		<!-- START DUPLICATE ("webpage") -->
		<?php
			getWebpage();
		?>
		<!-- END DUPLICATE ("webpage") -->
		<!-- START DUPLICATE ("hcard") -->
		<?php
			getHcard();
		?>
		<!-- END DUPLICATE ("hcard") -->
		<!-- START DUPLICATE ("scraped") -->
		<?php
			getScraped();
		?>
		<!-- END DUPLICATE ("scraped") -->
	  </div>
	  <div class="col-md-8">
		<ol>
		  <!-- START DUPLICATE ("cseImage") -->
		  <?php
			getCseimage();
		  ?>
		  <!-- END DUPLICATE ("cseImage") -->
		</ol>
		<ul>
		  <!-- START DUPLICATE ("url") -->
		  <?php
			getUrl();
		  ?>
		  <!-- END DUPLICATE ("url") -->
		</ul>
	  </div>
	</div>
  </div>
  
  <div class="clearfix"></div>
  <h2>Titles</h2>

  <div class="bs-example" data-example-id="striped-table">
	<table class="table table-striped table-hover">
	  <thead>
		<tr>
		  <th>#</th>
		  <th>Title</th>
		</tr>
	  </thead>
	  <tbody>
	    <!-- START DUPLICATE ("title") attention: the first <td> should count upwards 1,2,3... -->
		<?php
			getTitle();
		?>
		<!-- END DUPLICATE ("title") -->
	  </tbody>
	</table>
  </div>

  <div class="clearfix"></div>
  <h2>Contents</h2>

  <ul class="list-group">
    <!-- START DUPLICATE ("content") -->
	<?php
		getContent();
	?>
	<!-- END DUPLICATE ("content") -->
  </ul>

  <div class="clearfix"></div>
  <h2>Videos</h2>

  <div class="well">
	<div class="row">
      <!-- START DUPLICATE ("videoobject") -->
	  <?php
		getVideoobject();
	  ?>	  
	  <!-- END DUPLICATE ("videoobject") -->
	</div>
  </div>

  <?php
  if(!isset($metatags2->ogdesc))
	  $ogdesc = "Not Available";
  else
	  $ogdesc = $metatags2->ogdesc;
	echo '
	
	]]></content:encoded>
		<excerpt:encoded><![CDATA['. $ogdesc .']]></excerpt:encoded>
		<wp:post_date>2015-10-23 12:01:05</wp:post_date>
		<wp:comment_status>closed</wp:comment_status>
		<wp:ping_status>closed</wp:ping_status>
		<wp:status>future</wp:status>
		<wp:post_type>post</wp:post_type>
		<category domain="category" nicename="category"><![CDATA[category]]></category>';
	
	$keyarray = split(' ', $_GET['keywords']);
	foreach($keyarray as $keyword)
	{
		echo '<category domain="post_tag" nicename="'. $keyword.'"><![CDATA['. $keyword.']]></category>
	';
	}
	echo '</item>';
  ?>