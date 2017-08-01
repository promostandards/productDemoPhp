<script type="text/javascript">
    $(document).ready(function () {
        $("#submitorder").on("click", function () {
            $('#submitorder').addClass('btn-disabled');

        });
    });
</script>
<?php $form = $this->beginWidget('CActiveForm'); ?>
<div class="container">
    <div class="row">
        <img class="spi-header" src="" >Promostandards Demo 2017
        <hr/>
        <h1>Submit Test Order To Hit</h1>
        <hr/>
        <p>This is submitting the order to the Hit Test System(This is just a Demo)</p>
        <strong>Purchase Summary:</strong>


        <div class="form-group col-md-12 bg-primary">
            <label class="control-label" for="billinginformation">Shipping Information</label>
        </div>

        <div class="shipping-info">
            <div class="form-group col-md-6">
                <span class="required-lbl">* </span><label class="control-label" for="firstname">First Name</label>
                <div class="controls">
                    <input id="firstname" name="firstname" type="text" placeholder="" class="form-control" required="" value="Test">
                </div>
            </div>

            <div class="form-group col-md-6">
                <span class="required-lbl">* </span><label class="control-label" for="lastname">Last Name</label>
                <div class="controls">
                    <input id="lastname" name="lastname" type="text" placeholder="" class="form-control" required="" value="User">
                </div>
            </div>

            <div class="form-group col-md-6">
                <span class="required-lbl">* </span><label class="control-label" for="shippingaddress1">Shipping Address 1</label>
                <div class="controls">
                    <input id="shippingaddress1" name="shippingaddress1" type="text" placeholder="" class="form-control" required="" value="123 easy ST">
                </div>
            </div>

            <div class="form-group col-md-6">
                <label class="control-label" for="shippingaddress2">Shipping Address 2</label>
                <div class="controls">
                    <input id="shippingaddress2" name="shippingaddress2" type="text" placeholder="" class="form-control" required="" value="APT 2">
                </div>
            </div>

            <div class="form-group col-md-6">
                <span class="required-lbl">* </span><label class="control-label" for="shippingcountry">Shipping Country</label>
                <div class="controls">
                    <div class="controls">
                        <select id="shippingcountry" name="shippingcountry" class="input-xlarge">
                            <option>Please Select</option>
                            <option selected>US</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group col-md-6">
                <span class="required-lbl">* </span><label class="control-label" for="shippingstate">Shipping State</label>
                <div class="controls">
                    <select id="shippingstate" name="shippingstate" class="input-xlarge">
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL" selected>Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>
            </div>

            <div class="form-group col-md-6">
                <span class="required-lbl">* </span><label class="control-label" for="shippingcity">Shipping City</label>
                <div class="controls">
                    <input id="shippingcity" name="shippingcity" type="text" placeholder="" class="form-control" required="" value="Tampa">
                </div>
            </div>

            <div class="form-group col-md-6">
                <span class="required-lbl">* </span><label class="control-label" for="postcode">Post Code</label>
                <div class="controls">
                    <input id="postcode" name="postcode" type="text" placeholder="" class="form-control" required="" value="33777">
                </div>
            </div>

            <hr/>

            <div class="form-group col-md-12 bg-primary">
                <label class="control-label" for="contactinformation">Contact Information:</label>
            </div>

            <div class="form-group col-md-6">
                <span class="required-lbl">* </span><label class="control-label" for="emailaddress">Email Address</label>
                <div class="controls">
                    <input id="email" name="email" type="email" placeholder="" class="form-control" required="">
                </div>
            </div>

            <div class="form-group col-md-6">
                <label class="control-label" for="phone">Phone</label>
                <div class="controls">
                    <input id="phone" name="phone" type="number" placeholder="" class="form-control" required="">
                </div>
            </div>

            <div class="form-group col-md-6">
                <label class="control-label" for="organization">Organization</label>
                <div class="controls">
                    <input id="organization" name="organization" type="text" placeholder="" class="form-control" required="">
                </div>
            </div>

            <div class="form-group col-md-12 bg-primary">
                <label class="control-label" for="ponumber">PO Info:</label>
            </div>

            <div class="form-group col-md-6">
                <span class="required-lbl">*</span><label class="control-label" for="ponumber">PO#</label>
                <div class="controls">
                    <input id="ponumber" name="ponumber"  placeholder="" class="form-control" required="required" >
                </div>
            </div>

            <div class="form-group col-md-12 bg-primary">
                <label class="control-label" for="products">Products:</label>
            </div>

            <div class="form-group col-md-6">
                <span class="required-lbl">*</span><label class="control-label" for="productsku">Product Sku</label>
                <div class="controls">
                    <input id="productsku" name="productsku"  placeholder="" class="form-control" required="" value="<?php echo $_GET['productSku'];?>">
                </div>
            </div>

            <div class="form-group col-md-6">
                <label class="control-label" for="productquantity">Product Quantity</label>
                <div class="controls">
                    <input id="productquantity" name="productquantity" type="number" placeholder="" class="form-control" required="" value="<?php echo $_GET['quantity'];?>">
                </div>
            </div>

            <div class="form-group col-md-6">
                <label class="control-label" for="productprice">Price</label>
                <div class="controls">
                    <input id="productprice" name="productprice" type="text" placeholder="" class="form-control" required="" value="<?php echo $_GET['price'];?>">
                </div>
            </div>




            <div class="form-group col-md-12">
                <div class="control-group confirm-btn">
                    <label class="control-label" for="placeorderbtn"></label>
                    <div class="controls">
                        <?php echo CHtml::submitButton("Submit Order", array('id' => 'submitorder', 'class' => 'btn btn-primary'));?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php $this->endWidget(); ?>