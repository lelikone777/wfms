<?php


namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;

class ProductController extends AppController
{
    public function actionView($id) {
        $id = Yii::$app->request->get('id');
        //Ленивая загрузка
        $product = Product::findOne($id);
        //Жадная загрузка
        //$product = Product::find()->with('category')->where(['id' => $id])->limit(1)->one();

        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        return $this->render('view', compact('product', 'hits'));
    }
}