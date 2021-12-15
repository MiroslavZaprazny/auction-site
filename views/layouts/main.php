<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => 'Aukcna Stranka',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top py-3',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ms-auto'],
        'items' => [
            ['label' => 'Aukcie', 'url' => ['/site/index']],
            ['label' => 'Predaj Auto', 'url' => ['/site/about']],
            ['label' => 'Kontakt', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

    <section class="p-5 " id='kontakt'>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h2 class="text-center mb-4">
                        Kontakt
                    </h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                        <span class="fw-bold">
                            Adresa:
                        </span>
                            Neviem 123
                        </li>
                        <li class="list-group-item">
                        <span class="fw-bold">
                            Email:
                        </span>
                            email@email.com
                        </li>
                        <li class="list-group-item">
                        <span class="fw-bold">
                            Tel. cislo:
                        </span>
                            +421951351
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
