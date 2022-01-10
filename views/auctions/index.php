<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AuctionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Auctions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auctions-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Auctions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]);
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'auctionId',
            'auctionText:ntext',
            'auctionTitle',
            'created_at',
            'created_by:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>