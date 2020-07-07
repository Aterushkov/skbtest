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

<?if($arResult['PROPERTIES']['BLOCK_LOCATION']['VALUE_XML_ID'] == 'LEFT') :?>
	<div class="row mx-6 py-4 mx-icon">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 flex-wrap d-flex px-0">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-7 site-img">
				<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
					<img
						class="detail-picture-down-c"
						border="0"
						src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
						width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
						height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
						title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
						/>
				<?endif?>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-5 ">
				<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
					<h2 class="photo-text-down"><?=$arResult["NAME"]?></h2>
				<?if($arResult['PROPERTIES']['GREEN_WORDS']):?>
						<h2 class="photo-text-down photo-text-down-green"><?=$arResult['PROPERTIES']['GREEN_WORDS']['VALUE']?></h2>
					<?endif;?> 
				<?endif;?>
				<?if($arResult["NAV_RESULT"]):?>
				<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
				<?echo $arResult["NAV_TEXT"];?>
				<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
					<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
						<div class="p-content"><?echo $arResult["DETAIL_TEXT"];?></div>
					<?else:?>
						<?echo $arResult["PREVIEW_TEXT"];?>
					<?endif?>
			</div>
		</div>
	</div>

<?elseif($arResult['PROPERTIES']['BLOCK_LOCATION']['VALUE_XML_ID'] == 'RIGHT') :?>
	<div class="row mx-6 py-4 mx-icon">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 flex-wrap d-flex px-0">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-5 ">
				<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
					<h2 class="photo-text-down"><?=$arResult["NAME"]?></h2>
				<?if($arResult['PROPERTIES']['GREEN_WORDS']):?>
						<h2 class="photo-text-down photo-text-down-green"><?=$arResult['PROPERTIES']['GREEN_WORDS']['VALUE']?></h2>
					<?endif;?> 
				<?endif;?>
				<?if($arResult["NAV_RESULT"]):?>
				<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
				<?echo $arResult["NAV_TEXT"];?>
				<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
					<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
						<div class="p-content"><?echo $arResult["DETAIL_TEXT"];?></div>
					<?else:?>
						<?echo $arResult["PREVIEW_TEXT"];?>
					<?endif?>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-7 site-img">
				<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
					<img
						class="detail-picture-down-c"
						border="0"
						src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
						width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
						height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
						title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
						/>
				<?endif?>
			</div>
		</div>
	</div>
<?endif;?>