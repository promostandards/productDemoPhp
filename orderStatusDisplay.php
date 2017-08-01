<div class="row shop-tracking-status">

    <div class="col-md-12">
        <div class="well">


            <h4>Your order status:</h4>

            <ul class="list-group">
                <li class="list-group-item">
                    <span class="prefix">Date created:</span>
                    <span class="label label-success"><?php echo date('Y-m-d H:i:s');?></span>
                </li>
                <li class="list-group-item">
                    <span class="prefix">Order Number</span>
                    <span class="label label-success"><?php echo $order->transactionId;?></span>
                </li>
                <li class="list-group-item">
                    <span class="prefix">PO#</span>
                    <span class="label label-success"><?php echo $poNumber;?></span>
                </li>

            </ul>


        </div>
    </div>

</div>