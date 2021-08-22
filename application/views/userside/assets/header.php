
<script async src="https://platform-api.sharethis.com/js/sharethis.js#property=5ec4146756ae29001991fd5f&product=sticky-share-buttons"></script>
<nav class="navbar navbar-expand-lg justify-content-between top-main-nav fixed-top">
   <div class="container">
          <div class="logo-brand">
            <a class="navbar-brand d-flex align-items-center" href="<?=base_url()?>">
             <h4>namegenerator-engine.com</h4>
           </a>
          </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarName">
    <span class="navbar-toggler-icon pt-1">
      <i class="fas fa-bars"></i>
    </span>
  </button>
  <div class="collapse navbar-collapse" id="navbarName">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('Welcome') ?>">Home</a>
      </li>
      <li class="nav-item"></li>
      <li class="nav-item active">
        <a class="nav-link btn btn-success" data-toggle="modal" data-target="#exampleModal">Review Our Generator</a>
      </li>
    </ul>
  </div>
   </div>      
</nav>

<?php  include "reviewmodal.php";  ?>