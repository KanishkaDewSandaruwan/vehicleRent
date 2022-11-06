
    <!-- ##### Book Now Area Start ##### -->
    <div class="book-now-area" style="margin-left: 12%;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="book-now-form">
                        <form action="#" method="post">
                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select1">Start Date</label>
                                <input name="start_date" id="start_date" class="form-control" placeholder="Start Date" type="text" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select2">End Date</label>
                                <input name="end_date" id="end_date" class="form-control" placeholder="End Date" type="text" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select3">Vehicle Category</label>
                                <select  name="cat_id" id="cat_id" aria-label="Default select example">
                                <?php $getall = getAllCategory();
                                while($row=mysqli_fetch_assoc($getall)){ ?>
                                <option value="<?php echo $row['cat_id'] ?>"><?php echo $row['cat_name'] ?></option>
                                <?php } ?>
                                
                            </select>
                            </div>

                            <!-- Button -->
                            <button type="button" onclick="search(this.form)">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Book Now Area End ##### -->