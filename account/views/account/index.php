<?php
/**
 * Created by PhpStorm.
 * User: filipe_2
 * Date: 12/17/2015
 * Time: 9:47 AM
 */

$sidebar_divs = array(
    array(
        "img"   =>  "account/www/images/pixel.png",
        "text"  =>  "Os meus serviços",
        "href"  =>  "#",
        "state" =>  "red",
    ),
    array(
        "img"   =>  "account/www/images/pixel.png",
        "text"  =>  "Parcel Delivery",
        "href"  =>  "#",
        "state" =>  "active",
    ),
    array(
        "img"   =>  "account/www/images/pixel.png",
        "text"  =>  "iPOST Delivery",
        "href"  =>  "#",
        "state" =>  "",
    ),
    /*
    array(
        "img"   =>  "imagens/right_click.png",
        "text"  =>  "eAddress",
        "href"  =>  "#",
        "state" =>  "",
    )
    */

);
?>

<div class="col-lg-3 sidebarGeral">

    <div class="sidebar sidebar-border-top-red">
        <?php foreach($sidebar_divs as $item){ ?>
            <div class="sidebar-ul <?= $item['state']; ?>">
                <div class="sidebarSeta">
                    <img alt src="<?= $item['img']; ?>" style="width:100%;" />
                </div>
                <div class="sidebarA">
                    <a href="<?= $item['href']; ?>">
                        <h4 class="sidebarH sidebarLH" style="line-height:50px;"><?= $item['text']; ?></h4>
                    </a>
                </div>
            </div>
            <div class="sidebar-ul-divider"></div>
        <?php } ?>

        <?php foreach ($this->scope['users'] as $user) {
            print_r($user);

        }
        ?>

</div>

</div>

<div class="col-lg-8" style="background-color:white; border-top-left-radius:3px; border-top-right-radius:3px;">
    <div style="width:92%; margin:4% 4%;">
        <p style="text-align: justify; margin-top:2%; color:#353535;">
            DM Post, o nosso serviço para marketing directo de custo reduzido, é a melhor forma de se dirigir ao seu público alvo. É o ideal para envios publicitários endereçados de forma a atrair novos clientes, para o lançamento de novos produtos, para a angariação de fundos e para publicitar eventos da sua força de vendas – tudo o que publicite a sua empresa e atraia novos clientes.
        </p>
        <p style="text-align: justify; margin-top:2%; color:#353535; font-weight:bold;">
            Como funciona?
        </p>
        <p style="text-align: justify; margin-top:2%; color:#353535;">
            O DM Post está disponível para campanhas promocionais ou de marketing com 2000 envios ou mais.
        </p>
        <p style="text-align: justify; margin-top:2%; color:#353535;">
            Podemos conseguir-lhe grandes poupanças e fornecemos o papel, personalização, envelope e envelopagem gratuitamente, incluídos no serviço.
        </p>
        <p style="text-align: justify; margin-top:2%; color:#353535;">
            Preparamos o seu correio de acordo com os requisitos do DM Post – quanto mais enviar, mais poupará. A sua campanha será processada e entregue em 6 dias úteis a partir da data de envio. Um serviço de baixo custo com entrega diferida para campanhas de Marketing Direto e para clientes que enviam grandes quantidades de mailings editoriais.
        </p>
        <p style="text-align: justify; margin-top:2%; color:#353535;">
            Pela primeira vez em Portugal, a CityPOST inclui a preparação postal e fornecimento de envelope no seu serviço desde que as suas campanhas de DM se enquadrem num acordo anual.
        </p>
        <p style="text-align: justify; margin-top:2%; color:#353535;">
            O objectivo de tempo de entrega é de 20% por dia útil de forma a que possa gerir o seu Call Center e resposta ao cliente de forma controlada e com custos reduzidos, evitando picos de trabalho dispendiosos em pessoal de Call Center.
        </p>
    </div>
</div>

