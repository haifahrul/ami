<?php
/**
 * Created by PhpStorm.
 * User: haifa
 * Date: 25/05/2017
 * Time: 00.35
 */
/* @var $this yii\web\View */

$this->title = 'Web Service Pesawat';

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<div class="site-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Filter Data Berdasarkan:</p>
    <ol>
        <li>Tanggal</li>
        <li>Jam</li>
    </ol>

    <a href="http://testsibisnis.test/pesawat-restful/get-pesawat?d=JKT&a=DPS&date=2017-05-27&ret_date=2017-06-02&adult=1&child=0&infant=0"
       target="_blank">
        <div class="btn btn-success">Show Data</div>
    </a>

</div>


<div class="dnd-table dnd-table-alternative dnd-table-striped ">

    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr>
                <td width="12%">Tanggal</td>
                <td width="1%">:</td>
                <td width="87%">03-10-2017 </td>
            </tr>
            <tr>
                <td>Jam</td>
                <td>:</td>
                <td>08:51:28</td>
            </tr>
            <tr>
                <td>Description</td>
                <td>:</td>
                <td>Gold Bar</td>
            </tr>
        </tbody></table>
    <!--<div class="dnd_alert_info" style="width:98%">
Buy Back Price : 

Rp.0 /gram						</div>-->

    <table class="table datatable-basic table-striped" style="width:98%">
        <thead>
            <tr>
                <th>Produk</th>
                <th>Gram</th>
                <th class="text-center">Price per Bar (Rp)</th>
                <th class="text-center">Price per Gram (Rp)</th>


                <th class="text-center">Stock</th>
            </tr>
        </thead>
        <tbody>
            <!-- BATAS MULAI QUERY -->
            <tr>

                <td bgcolor="#FFFFFF">
                    -									
                </td>
                <td bgcolor="#FFFFFF">1									
                </td>
                <td bgcolor="#FFFFFF">


                    614.000								

                </td>
                <td bgcolor="#FFFFFF">
                    614.000									</td>

                <td bgcolor="#FFFFFF" class="text-center">Available</td>


            </tr>
            <!-- BATAS AKHIR -->
            <!-- BATAS MULAI QUERY -->
            <tr>

                <td bgcolor="#FFFFFF">
                    -									
                </td>
                <td bgcolor="#FFFFFF">2									
                </td>
                <td bgcolor="#FFFFFF">


                    1.188.000								

                </td>
                <td bgcolor="#FFFFFF">
                    594.000									</td>

                <td bgcolor="#FFFFFF" class="text-center">Available</td>


            </tr>
            <!-- BATAS AKHIR -->
            <!-- BATAS MULAI QUERY -->
            <tr>

                <td bgcolor="#FFFFFF">
                    -									
                </td>
                <td bgcolor="#FFFFFF">2.5									
                </td>
                <td bgcolor="#FFFFFF">


                    1.475.000								

                </td>
                <td bgcolor="#FFFFFF">
                    590.000									</td>

                <td bgcolor="#FFFFFF" class="text-center">Available</td>


            </tr>
            <!-- BATAS AKHIR -->
            <!-- BATAS MULAI QUERY -->
            <tr>

                <td bgcolor="#FFFFFF">
                    -									
                </td>
                <td bgcolor="#FFFFFF">3									
                </td>
                <td bgcolor="#FFFFFF">


                    1.764.000								

                </td>
                <td bgcolor="#FFFFFF">
                    588.000									</td>

                <td bgcolor="#FFFFFF" class="text-center">Available</td>


            </tr>
            <!-- BATAS AKHIR -->
            <!-- BATAS MULAI QUERY -->
            <tr>

                <td bgcolor="#FFFFFF">
                    -									
                </td>
                <td bgcolor="#FFFFFF">4									
                </td>
                <td bgcolor="#FFFFFF">


                    2.340.000								

                </td>
                <td bgcolor="#FFFFFF">
                    585.000									</td>

                <td bgcolor="#FFFFFF" class="text-center">Available</td>


            </tr>
            <!-- BATAS AKHIR -->
            <!-- BATAS MULAI QUERY -->
            <tr>

                <td bgcolor="#FFFFFF">
                    -									
                </td>
                <td bgcolor="#FFFFFF">5									
                </td>
                <td bgcolor="#FFFFFF">


                    2.925.000								

                </td>
                <td bgcolor="#FFFFFF">
                    585.000									</td>

                <td bgcolor="#FFFFFF" class="text-center">Available</td>


            </tr>
            <!-- BATAS AKHIR -->
            <!-- BATAS MULAI QUERY -->
            <tr>

                <td bgcolor="#FFFFFF">
                    -									
                </td>
                <td bgcolor="#FFFFFF">10									
                </td>
                <td bgcolor="#FFFFFF">


                    5.775.000								

                </td>
                <td bgcolor="#FFFFFF">
                    577.500									</td>

                <td bgcolor="#FFFFFF" class="text-center">Available</td>


            </tr>
            <!-- BATAS AKHIR -->
            <!-- BATAS MULAI QUERY -->
            <tr>

                <td bgcolor="#FFFFFF">
                    -									
                </td>
                <td bgcolor="#FFFFFF">25									
                </td>
                <td bgcolor="#FFFFFF">


                    14.300.000								

                </td>
                <td bgcolor="#FFFFFF">
                    572.000									</td>

                <td bgcolor="#FFFFFF" class="text-center">Not Available</td>


            </tr>
            <!-- BATAS AKHIR -->
            <!-- BATAS MULAI QUERY -->
            <tr>

                <td bgcolor="#FFFFFF">
                    -									
                </td>
                <td bgcolor="#FFFFFF">50									
                </td>
                <td bgcolor="#FFFFFF">


                    28.450.000								

                </td>
                <td bgcolor="#FFFFFF">
                    569.000									</td>

                <td bgcolor="#FFFFFF" class="text-center">Available</td>


            </tr>
            <!-- BATAS AKHIR -->
            <!-- BATAS MULAI QUERY -->
            <tr>

                <td bgcolor="#FFFFFF">
                    -									
                </td>
                <td bgcolor="#FFFFFF">100									
                </td>
                <td bgcolor="#FFFFFF">


                    56.725.000								

                </td>
                <td bgcolor="#FFFFFF">
                    567.250									</td>

                <td bgcolor="#FFFFFF" class="text-center">Available</td>


            </tr>
            <!-- BATAS AKHIR -->
            <!-- BATAS MULAI QUERY -->
            <tr>

                <td bgcolor="#FFFFFF">
                    -									
                </td>
                <td bgcolor="#FFFFFF">250									
                </td>
                <td bgcolor="#FFFFFF">


                    141.425.000								

                </td>
                <td bgcolor="#FFFFFF">
                    565.700									</td>

                <td bgcolor="#FFFFFF" class="text-center">Not Available</td>


            </tr>
            <!-- BATAS AKHIR -->
            <!-- BATAS MULAI QUERY -->
            <tr>

                <td bgcolor="#FFFFFF">
                    -									
                </td>
                <td bgcolor="#FFFFFF">500									
                </td>
                <td bgcolor="#FFFFFF">


                    282.475.000								

                </td>
                <td bgcolor="#FFFFFF">
                    564.950									</td>

                <td bgcolor="#FFFFFF" class="text-center">Available</td>


            </tr>
            <!-- BATAS AKHIR -->



        </tbody>
    </table>



</div>