<?php
$this->breadcrumbs = array(
    'Test Hit Soap Services Product Data',
);
/**
 * @var TestProductData $model
 */
?>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"/>

<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js"></script>

<script type="text/javascript"
        src="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
      integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<link rel="stylesheet"
      href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"/>

<script type="text/javascript">
    $(document).ready(function () {
        $("#psButton").on("click", function () {
            $('#psButton').addClass('btn-disabled');
            $('#psButton').attr('disabled', 'disabled');
            $('#psButton').prop('disabled', true);
        });
    });
</script>

<div class="container-fluid">
    <h1><?php echo $this->pageTitle; ?></h1>

    <div class="row">
        <div class="col-lg-6 col-lg-offset-1">
            <div class="form-group">
                <?php $form = $this->beginWidget('CActiveForm'); ?>
                <p class="note"><i>Fields with <span class="required">*</span> are required.</i></p>
                <?php echo $form->errorSummary($model); ?>
                <?php echo $form->labelEx($model, 'id'); ?>
                <?php echo $form->numberField($model, 'id', array('class' => 'form-control', 'value' => $id)); ?>
                <i>The id provided by your supplier/distributor.</i><br>
                <br>
                <?php echo $form->labelEx($model, 'credentials'); ?>
                <?php echo $form->passwordField($model, 'credentials', array('class' => 'form-control', 'value' => $credentials)); ?>
                <br>
                <?php echo $form->labelEx($model, 'wsVersion'); ?>
                <?php echo $form->textField($model, 'wsVersion', array('class' => 'form-control', 'value' => "1.0.0")); ?>
                <br>
                <?php echo $form->labelEx($model, 'productId'); ?>
                <?php echo $form->textField($model, 'productId', array('class' => 'form-control', 'value' => "7050")); ?>
                <br>
                <br>
                <?php echo CHtml::submitButton('Get Product Data', array('class' => 'btn btn-primary', 'id' => 'psButton')); ?>
                <?php $this->endWidget(); ?>
                <!-- Modal -->

            </div>
            <!-- form-group -->
        </div>
        <!-- col -->
    </div>
    <!-- row -->
</div>
