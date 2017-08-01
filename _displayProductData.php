<!DOCTYPE html>
<html lang="en">
<script type="text/css">
    .carousel {
        width: 640px;
        height: 360px;
    }
</script>
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }

        .carousel-inner img {
            width: 100%; /* Set width to 100% */
            min-height: 200px;
        }

        /* Hide the carousel text when the screen is less than 600 pixels wide */
        @media (max-width: 600px) {
            .carousel-caption {
                display: none;
            }
        }
    </style>
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $active = false;
                    foreach ($productMedia->MediaContentArray->MediaContent as $media) {
                        if (!$active) {
                            echo '<div class="item active">';
                        } else {
                            echo '<div class="item">';
                        }
                        echo '<img src="' . $media->url . '" alt="Image" style="width: 640px;height : 480px;">';
                        echo '<div class="carousel-caption">';
                        echo "<h3>{$media->partId}</h3>";
                        echo '</div>';
                        echo '</div>';
                        $active = true;
                    }
                    ?>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="well">
                <div class="card" style="width: 20rem;">
                    <p><b>Product:</b> <?php echo $productData->Product->productId; ?></p>
                    <div class="card-block">
                        <h4 class="card-title">Product Name:</h4>
                        <p class="card-text"><?php echo $productData->Product->productName; ?></p>
                    </div>
                    <div class="card-block">
                        <h4 class="card-title">Product Category:</h4>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#"><?php echo $productData->Product->ProductCategoryArray->ProductCategory->category; ?></a>
                            </li>
                            <li>
                                <a href="#"><?php echo $productData->Product->ProductCategoryArray->ProductCategory->subCategory; ?></a>
                            </li>
                        </ul>
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php
                        foreach ($productData->Product->ProductMarketingPointArray->ProductMarketingPoint as $marketing) {
                            echo '<li class="list-group-item">' . $marketing->pointCopy . '</li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>

<div class="well">
    <div class="container">
        <div class="row">
            <?php foreach ($pricing->Configuration->PartArray->Part as $part) {

                ?>
                <div class="col-xs-12 col-md-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Product SKU <?php echo $part->partId; ?></h3>
                        </div>
                        <div class="panel-body">
                            <div class="the-price">
                                <h1>
                                    Price Tiers
                                </h1>
                                <small>Discount Code: <?php echo $price->discountCode;?></small>
                            </div>
                            <table class="table">
                                <?php foreach ($part->PartPriceArray->PartPrice as $price) { ?>
                                    <tr>
                                        <td>
                                            Min qty <?php echo $price->minQuantity . " - Price is " . Yii::app()->numberFormatter->formatCurrency($price->price, 'USD');?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                        <div class="panel-footer">
                            <a href="<?php echo    Yii::app()->createAbsoluteUrl('site/submitTestOrder', array('productSku' => $part->partId, 'price' => $price->price, 'quantity' => $price->minQuantity));?>" class="btn btn-success" role="button">Place Test Order</a>
                        </div>
                    </div>
                </div>
                <?php
            } ?>
        </div>
    </div>

</div>

<div class="container text-center">
    <h3>Product Variations (With Inventory)</h3>
    <br>
    <div class="row">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Part variation</th>
                    <th>Color</th>
                    <th>Inventory</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($inv->ProductVariationInventoryArray->ProductVariationInventory as $inventory) {
                    echo "<tr>";
                    echo "<td>{$inventory->partID}</td>";
                    echo "<td>{$inventory->attributeColor}</td>";
                    echo "<td>{$inventory->quantityAvailable}</td>";
                    echo " </tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <hr>
</div>


<br>

<footer class="container-fluid text-center">
    <p>Promostandards Demo 2017</p>
</footer>

</body>
</html>
