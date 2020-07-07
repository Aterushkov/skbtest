<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?> 
<? 

//  echo '<pre>'. print_r($arResult, true) .'</pre>';

?>
<div class="row mx-6 pt-4  mx-icon">
<?if($arResult['PROPERTIES']["NEED_TITLE"]["VALUE_XML_ID"] == YES) :?>

		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
				<h2 class="h2-icon-content"><?=$arResult["NAME"]?></h2>
			<?endif;?>
		</div>
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mx-icon-p flex-wrap align-items-center big-head-table">
				<div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 icon-flex ">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
						<?if(is_array($arResult["PROPERTIES"]["PHOTO_PS"])):?>
								<span class="head-text"><?=$arResult["PROPERTIES"]["PHOTO_PS"]["NAME"]?></span>
						<?endif;?>
					</div>
				</div>
				<div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 icon-flex">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_ONE_PS"])):?>
							<span class="head-text"><?=$arResult["PROPERTIES"]["TEXT_ONE_PS"]["NAME"]?></span>
						<?endif;?>
					</div>
				</div>
				<div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 icon-flex">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_TWO_PS"])):?>
							<span class="head-text"><?=$arResult["PROPERTIES"]["TEXT_TWO_PS"]["NAME"]?></span>
						<?endif;?>
					</div>
				</div>
				<div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 icon-flex">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_THREE_PS"])):?>
							<span class="head-text"><?=$arResult["PROPERTIES"]["TEXT_THREE_PS"]["NAME"]?></span>
						<?endif;?>
					</div>
				</div>
				<div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 icon-flex">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_FOUR_PS"])):?>
							<span class="head-text"><?=$arResult["PROPERTIES"]["TEXT_FOUR_PS"]["NAME"]?></span>
						<?endif;?>
					</div>
				</div>
				<div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 icon-flex">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_FIVE_PS"])):?>
							<span class="head-text"><?=$arResult["PROPERTIES"]["TEXT_FIVE_PS"]["NAME"]?></span>
						<?endif;?>
					</div>
				</div>
		</div>
		<?endif?>


		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mx-icon-p flex-wrap d-flex shadow align-items-center">
				<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-2 icon-flex px-0 pb-6">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center ">
						<?if(is_array($arResult["PROPERTIES"]["PHOTO_PS"])):?>
							<img class="payimg"
								border="0"
								src="<?=CFile::GetPath($arResult["PROPERTIES"]["PHOTO_PS"]["VALUE"])?>"
								alt="<?=$arResult["NAME"]?>"
								title="<?=$arResult["NAME"]?>"
								/>
						<?endif?>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-2 icon-flex px-0 pb-6">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center ">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_ONE_PS"])):?>
							<span class="head-text head-pay-sys"><?=$arResult["PROPERTIES"]["TEXT_ONE_PS"]["NAME"]?></span>
						<?endif;?>
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_ONE_PS"])):?>
							<span class="pay-table-text"><?=$arResult["PROPERTIES"]["TEXT_ONE_PS"]["VALUE"]?></span>
						<?endif;?>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2 icon-flex px-0 pb-6">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_TWO_PS"])):?>
							<span class="head-text head-pay-sys"><?=$arResult["PROPERTIES"]["TEXT_TWO_PS"]["NAME"]?></span>
						<?endif;?>
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_TWO_PS"])):?>
							<a class="a-tarif" href="<?=CFile::GetPath($arResult["PROPERTIES"]["FILE_PS"]["VALUE"])?>"><span ><?=$arResult["PROPERTIES"]["TEXT_TWO_PS"]["VALUE"]?></span></a>  
						<?endif;?>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2 icon-flex px-0 ">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_THREE_PS"])):?>
							<span class="head-text head-pay-sys"><?=$arResult["PROPERTIES"]["TEXT_THREE_PS"]["NAME"]?></span>
						<?endif;?>
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center px-0">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_THREE_PS"])):?>
							<span class="pay-table-text text-center"><?=$arResult["PROPERTIES"]["TEXT_THREE_PS"]["VALUE"]?></span>
						<?endif;?>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2 icon-flex px-0 ">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_FOUR_PS"])):?>
							<span class="head-text head-pay-sys"><?=$arResult["PROPERTIES"]["TEXT_FOUR_PS"]["NAME"]?></span>
						<?endif;?>
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_FOUR_PS"])):?>
							<span class="pay-table-text"><?=$arResult["PROPERTIES"]["TEXT_FOUR_PS"]["VALUE"]?></span>
						<?endif;?>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2 icon-flex px-0">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_FIVE_PS"])):?>
							<span class="head-text head-pay-sys"><?=$arResult["PROPERTIES"]["TEXT_FIVE_PS"]["NAME"]?></span>
						<?endif;?>
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center ">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_FIVE_PS"])):?>
							<span class="pay-table-text"><?=$arResult["PROPERTIES"]["TEXT_FIVE_PS"]["VALUE"]?></span>
						<?endif;?>
					</div>
				</div>
		</div>
	</div>