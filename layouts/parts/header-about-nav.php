<nav id="main-nav" class="clearfix">
    <ul class="menu entities-menu clearfix">
        <li id="entities-menu-event" ng-class="{'active':data.global.filterEntity === 'event',
                           'current-entity-parent':'panel' == 'event'}" ng-click="tabClick('event')">
            <a href="http://localhost:8080/print">
                <div class="icon icon-event"></div>
                <div class="menu-item-label">Suporte</div>
            </a>
        </li>
    </ul>
</nav>


<nav id="about-nav" class="alignright clearfix">
    <h1 id="organization-logo"><a href="http://www.ceara.gov.br/" target="_blank"><img src="<?php $this->asset('img/logo-org-ceara.png'); ?>" /></a></h1>
    <ul id="secondary-menu">
        <li><a class="icon icon-about hltip" href="<?php echo $app->createUrl('site', 'page', array('sobre')) ?>" title="Sobre o Mapa Cultural do Ceará"></a></li>
        <li><a class="icon icon-help hltip" href="<?php echo $app->createUrl('site', 'page', array('como-usar')) ?>" title="Como usar"></a></li>
    </ul>
</nav>