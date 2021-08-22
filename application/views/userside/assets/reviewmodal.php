<!-- Button trigger modal -->

<link rel="stylesheet" type="text/css" href="<?= base_url('css/review.css') ?>"/>

<script>
        function stars(stars) {

            document.getElementById('stars').value = stars;

            if (stars > 0) {

                document.getElementById('1_star').style.color = '#cc9900';

            } else {

                document.getElementById('1_star').style.color = '#000000';

            }

            if (stars > 1) {

                document.getElementById('2_star').style.color = '#cc9900';

            } else {

                document.getElementById('2_star').style.color = '#000000';

            }

            if (stars > 2) {

                document.getElementById('3_star').style.color = '#cc9900';

            } else {

                document.getElementById('3_star').style.color = '#000000';

            }

            if (stars > 3) {

                document.getElementById('4_star').style.color = '#cc9900';

            } else {

                document.getElementById('4_star').style.color = '#000000';

            }

            if (stars > 4) {

                document.getElementById('5_star').style.color = '#cc9900';

            } else {

                document.getElementById('5_star').style.color = '#000000';

            }

        }
    </script>

<!-- 
<center>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Review Our Generator
</button>
</center> -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Review Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <div class="row">
               <div class="col-12">
                   <form action="<?= base_url('InsertController/insertData') ?>" method="post">
                       <div class="from-group">
                           <label for="">Enter Your Name</label>
                           <input type="text" name="name" class="form-control" required>
                           <input type="hidden" value="review" name="table">
                       </div>
                       <?php   $current_url = current_url(); 
                                                                    $arr = explode('/', $current_url);
                                                                    $url = $arr['3']; 
                                                            ?>
                                                            <input type="hidden" value="<?=$url?>" name="url">
                
                       <div class="from-group">
                           <label for="">Enter Your Age</label>
                           <input type="text" name="age" class="form-control" required>
                       </div>
                       <div class="from-group">
                           <label for="">Enter Your Email</label>
                           <input type="email" name="email" class="form-control" required>
                       </div>
                       <div class="form-group">
                       <!-- <span class="small">Please choose 1-5.</span> -->
                            <label for="">Please Choose </label> <br>
								<span class="star" id="1_star" onclick="stars(1)">&starf;</span>
								<span class="star" id="2_star" onclick="stars(2)">&starf;</span>
								<span class="star" id="3_star" onclick="stars(3)">&starf;</span>
								<span class="star" id="4_star" onclick="stars(4)">&starf;</span>
								<span class="star" id="5_star" onclick="stars(5)">&starf;</span>
								<input type="hidden" value="" name="star" id="stars" />
                       </div>
                       <div class="from-group">
                           <label for="">Enter Your Review</label>
                           <textarea name="review" id="" class="form-control" rows="7" required></textarea>
                       </div>
                       <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                       </div>
                   </form>
               </div>
           </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>