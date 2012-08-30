<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<div id="icon_nav">
    <table callpadding ="0" id="icon_table">
        <tr>
            <td>
                <a href="<?php echo URL::base(); ?>yaadmin/menus"><?php echo HTML::image('styles/image/menu.png') ?></a>
            </td>
            <td>
                <ul>
                    <li class="li-t">Меню</li>
                    <li class="li-n"><a href="<?php echo URL::base(); ?>yaadmin/addmenu">Создать новую</a></li>
                    <li class="li-n"><a href="<?php echo URL::base(); ?>yaadmin/menus">Показать все</a></li>
                </ul>
            </td>
            <td style="width:20px;"></td>
            <td>
                 <a href="<?php echo URL::base(); ?>yaadmin/pages"><?php echo HTML::image('styles/image/page.png') ?></a>
            </td>
            <td>
                <ul>
                    <li class="li-t">Страницы</li>
                    <li class="li-n"><a href="<?php echo URL::base(); ?>yaadmin/addpage">Создать новую</a></li>
                    <li class="li-n"><a href="<?php echo URL::base(); ?>admin/pages">Показать все</a></li>
                </ul>
            </td>
            
        </tr>
        <tr style="height: 20px;"></tr>
        <tr>
            <td>
                <a href="<?php echo URL::base(); ?>yaadmin/categories"><?php echo HTML::image('styles/image/categories.png') ?></a>
            </td>
            <td>
                <ul>
                    <li class="li-t">Категории</li>
                    <li class="li-n"><a href="<?php echo URL::base(); ?>yaadmin/addcategories">Создать новую</a></li>
                    <li class="li-n"><a href="<?php echo URL::base(); ?>yaadmin/categories">Показать все</a></li>
                </ul>
            </td>
            <td style="width:20px;"></td>
            <td>
                 <a href="<?php echo URL::base(); ?>yaadmin/products"><?php echo HTML::image('styles/image/product.png') ?></a>
            </td>
            <td>
                <ul>
                    <li class="li-t">Продукт</li>
                    <li class="li-n"><a href="<?php echo URL::base(); ?>yaadmin/addproducts">Создать новый</a></li>
                    <li class="li-n"><a href="<?php echo URL::base(); ?>yaadmin/products">Показать все</a></li>
                </ul>
            </td>
        </tr>
        <tr style="height: 20px;"></tr>
        <tr>
            <td>
                <a href="/yaadmin/news"><img src="styles/image/news.png" /></a>
            </td>
            <td width="60">
                <ul>
                    <li class="li-t">Новости</li>
                    <li class="li-n"><a href="/yaadmin/addnews">Создать новую</a></li>
                    <li class="li-n"><a href="/yaadmin/news">Показать все</a></li>
                </ul>
            </td>
            <td style="width:20px;"></td>
            <td>
                 <a href="/yaadmin/articles"><img src="styles/image/articles.png" /></a>
            </td>
            <td>
                <ul>
                    <li class="li-t">Статьи</li>
                    <li class="li-n"><a href="/yaadmin/addarticles">Создать новый</a></li>
                    <li class="li-n"><a href="/yaadmin/articles">Показать все</a></li>
                </ul>
            </td>
        </tr>
    </table>
</div>