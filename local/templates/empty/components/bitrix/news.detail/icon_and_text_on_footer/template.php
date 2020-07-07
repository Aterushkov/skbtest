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

<div class="row mx-6 py-4 mx-icon">
		<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 flex-wrap d-flex px-0 align-items-center">
			<div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 site-img d-flex justify-content-end">
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
			<div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 ">
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