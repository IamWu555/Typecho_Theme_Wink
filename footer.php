<div class="copyright">
  <p>&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></p>
  <p><?php _e(' Theme is <a href="#">Wink</a> By <a href="https://blog.wubuster.com">IamWu555</a>'); ?></p>
</div>
<?php $this->footer(); ?>
<script type="text/javascript">
 function divShow(){
  document.getElementById("btnshow").style.display="block";
  document.getElementById("btnhref").href ="javascript:divhidden()";
}
 function divhidden(){
  document.getElementById("btnshow").style.display="none";
  document.getElementById("btnhref").href ="javascript:divShow()";
}
</script>
</body>
</html>
