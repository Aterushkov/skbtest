<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CFile $File */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>


<?if($arResult['PROPERTIES']['NUM_ELEMENTS']['VALUE_ENUM'] == 3) :?>

	<div class="row mx-6 py-4  mx-icon">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
				<h2 class="h2-icon-content"><?=$arResult["NAME"]?></h2>
			<?endif;?>
		</div>
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mx-icon-p flex-wrap d-flex shadow">
				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 icon-flex">
					<div class="col-3 col-sm-3 col-md-12 col-lg-12 col-xl-12 ">
						<?if(is_array($arResult["PROPERTIES"]["PHOTO_ONE"])):?>
							<img
								border="0"
								src="<?=CFile::GetPath($arResult["PROPERTIES"]["PHOTO_ONE"]["VALUE"])?>"
								alt="<?=$arResult["PROPERTIES"]["TEXT_ONE"]["VALUE"]?>"
								title="<?=$arResult["PROPERTIES"]["TEXT_ONE"]["VALUE"]?>"
								/>
						<?endif?>
					</div>
					<div class="col-9 col-sm-9 col-md-12 col-lg-12 col-xl-12 img-p">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_ONE"])):?>
							<span class="span-icon"><?=$arResult["PROPERTIES"]["TEXT_ONE"]["VALUE"]?></span>
						<?endif;?>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 icon-flex">
					<div class="col-3 col-sm-3 col-md-12 col-lg-12 col-xl-12 ">
						<?if(is_array($arResult["PROPERTIES"]["PHOTO_TWO"])):?>
							<img
								border="0"
								src="<?=CFile::GetPath($arResult["PROPERTIES"]["PHOTO_TWO"]["VALUE"])?>"
								alt="<?=$arResult["PROPERTIES"]["TEXT_TWO"]["VALUE"]?>"
								title="<?=$arResult["PROPERTIES"]["TEXT_TWO"]["VALUE"]?>"
								/>
						<?endif?>
					</div>
					<div class="col-9 col-sm-9 col-md-12 col-lg-12 col-xl-12 img-p">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_TWO"])):?>
							<span class="span-icon"><?=$arResult["PROPERTIES"]["TEXT_TWO"]["VALUE"]?></span>
						<?endif;?>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 icon-flex">
					<div class="col-3 col-sm-3 col-md-12 col-lg-12 col-xl-12 ">
						<?if(is_array($arResult["PROPERTIES"]["PHOTO_THREE"])):?>
							<img
								border="0"
								src="<?=CFile::GetPath($arResult["PROPERTIES"]["PHOTO_THREE"]["VALUE"])?>"
								alt="<?=$arResult["PROPERTIES"]["TEXT_THREE"]["VALUE"]?>"
								title="<?=$arResult["PROPERTIES"]["TEXT_THREE"]["VALUE"]?>"
								/>
						<?endif?>
					</div>
					<div class="col-9 col-sm-9 col-md-12 col-lg-12 col-xl-12 img-p">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_THREE"])):?>
							<span class="span-icon"><?=$arResult["PROPERTIES"]["TEXT_THREE"]["VALUE"]?></span>
						<?endif;?>
					</div>
				</div>
		</div>
	</div>

	<?elseif($arResult['PROPERTIES']['NUM_ELEMENTS']['VALUE_ENUM'] == 4) :?>

		<div class="row mx-6 py-4  mx-icon">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
			<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
				<h2 class="h2-icon-content"><?=$arResult["NAME"]?></h2>
			<?endif;?>
		</div>
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mx-icon-p flex-wrap d-flex shadow">
				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 icon-flex">
					<div class="col-3 col-sm-3 col-md-12 col-lg-12 col-xl-12 ">
						<?if(is_array($arResult["PROPERTIES"]["PHOTO_ONE"])):?>
							<img
								border="0"
								src="<?=CFile::GetPath($arResult["PROPERTIES"]["PHOTO_ONE"]["VALUE"])?>"
								alt="<?=$arResult["PROPERTIES"]["TEXT_ONE"]["VALUE"]?>"
								title="<?=$arResult["PROPERTIES"]["TEXT_ONE"]["VALUE"]?>"
								/>
						<?endif?>
					</div>
					<div class="col-9 col-sm-9 col-md-12 col-lg-12 col-xl-12 img-p">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_ONE"])):?>
							<span class="span-icon"><?=$arResult["PROPERTIES"]["TEXT_ONE"]["VALUE"]?></span>
						<?endif;?>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 icon-flex">
					<div class="col-3 col-sm-3 col-md-12 col-lg-12 col-xl-12 ">
						<?if(is_array($arResult["PROPERTIES"]["PHOTO_TWO"])):?>
							<img
								border="0"
								src="<?=CFile::GetPath($arResult["PROPERTIES"]["PHOTO_TWO"]["VALUE"])?>"
								alt="<?=$arResult["PROPERTIES"]["TEXT_TWO"]["VALUE"]?>"
								title="<?=$arResult["PROPERTIES"]["TEXT_TWO"]["VALUE"]?>"
								/>
						<?endif?>
					</div>
					<div class="col-9 col-sm-9 col-md-12 col-lg-12 col-xl-12 img-p">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_TWO"])):?>
							<span class="span-icon"><?=$arResult["PROPERTIES"]["TEXT_TWO"]["VALUE"]?></span>
						<?endif;?>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 icon-flex">
					<div class="col-3 col-sm-3 col-md-12 col-lg-12 col-xl-12 ">
						<?if(is_array($arResult["PROPERTIES"]["PHOTO_THREE"])):?>
							<img
								border="0"
								src="<?=CFile::GetPath($arResult["PROPERTIES"]["PHOTO_THREE"]["VALUE"])?>"
								alt="<?=$arResult["PROPERTIES"]["TEXT_THREE"]["VALUE"]?>"
								title="<?=$arResult["PROPERTIES"]["TEXT_THREE"]["VALUE"]?>"
								/>
						<?endif?>
					</div>
					<div class="col-9 col-sm-9 col-md-12 col-lg-12 col-xl-12 img-p">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_THREE"])):?>
							<span class="span-icon"><?=$arResult["PROPERTIES"]["TEXT_THREE"]["VALUE"]?></span>
						<?endif;?>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 icon-flex">
					<div class="col-3 col-sm-3 col-md-12 col-lg-12 col-xl-12 ">
						<?if(is_array($arResult["PROPERTIES"]["PHOTO_FOUR"])):?>
							<img
								border="0"
								src="<?=CFile::GetPath($arResult["PROPERTIES"]["PHOTO_FOUR"]["VALUE"])?>"
								alt="<?=$arResult["PROPERTIES"]["TEXT_FOUR"]["VALUE"]?>"
								title="<?=$arResult["PROPERTIES"]["TEXT_FOUR"]["VALUE"]?>"
								/>
						<?endif?>
					</div>
					<div class="col-9 col-sm-9 col-md-12 col-lg-12 col-xl-12 img-p">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_FOUR"])):?>
							<span class="span-icon"><?=$arResult["PROPERTIES"]["TEXT_FOUR"]["VALUE"]?></span>
						<?endif;?>
					</div>
				</div>
		</div>
	</div>

	<?elseif($arResult['PROPERTIES']['NUM_ELEMENTS']['VALUE_ENUM'] == 5) :?>

	<div class="row mx-6 py-4  mx-icon">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
			<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
				<h2 class="h2-icon-content"><?=$arResult["NAME"]?></h2>
			<?endif;?>
		</div>
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mx-icon-p flex-wrap d-flex shadow">
				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-2 icon-flex">
					<div class="col-3 col-sm-3 col-md-12 col-lg-12 col-xl-12 ">
						<?if(is_array($arResult["PROPERTIES"]["PHOTO_ONE"])):?>
							<img
								border="0"
								src="<?=CFile::GetPath($arResult["PROPERTIES"]["PHOTO_ONE"]["VALUE"])?>"
								alt="<?=$arResult["PROPERTIES"]["TEXT_ONE"]["VALUE"]?>"
								title="<?=$arResult["PROPERTIES"]["TEXT_ONE"]["VALUE"]?>"
								/>
						<?endif?>
					</div>
					<div class="col-9 col-sm-9 col-md-12 col-lg-12 col-xl-12 img-p">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_ONE"])):?>
							<span class="span-icon"><?=$arResult["PROPERTIES"]["TEXT_ONE"]["VALUE"]?></span>
						<?endif;?>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-2 icon-flex">
					<div class="col-3 col-sm-3 col-md-12 col-lg-12 col-xl-12 ">
						<?if(is_array($arResult["PROPERTIES"]["PHOTO_TWO"])):?>
							<img
								border="0"
								src="<?=CFile::GetPath($arResult["PROPERTIES"]["PHOTO_TWO"]["VALUE"])?>"
								alt="<?=$arResult["PROPERTIES"]["TEXT_TWO"]["VALUE"]?>"
								title="<?=$arResult["PROPERTIES"]["TEXT_TWO"]["VALUE"]?>"
								/>
						<?endif?>
					</div>
					<div class="col-9 col-sm-9 col-md-12 col-lg-12 col-xl-12 img-p">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_TWO"])):?>
							<span class="span-icon"><?=$arResult["PROPERTIES"]["TEXT_TWO"]["VALUE"]?></span>
						<?endif;?>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-2 icon-flex">
					<div class="col-3 col-sm-3 col-md-12 col-lg-12 col-xl-12 ">
						<?if(is_array($arResult["PROPERTIES"]["PHOTO_THREE"])):?>
							<img
								border="0"
								src="<?=CFile::GetPath($arResult["PROPERTIES"]["PHOTO_THREE"]["VALUE"])?>"
								alt="<?=$arResult["PROPERTIES"]["TEXT_THREE"]["VALUE"]?>"
								title="<?=$arResult["PROPERTIES"]["TEXT_THREE"]["VALUE"]?>"
								/>
						<?endif?>
					</div>
					<div class="col-9 col-sm-9 col-md-12 col-lg-12 col-xl-12 img-p">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_THREE"])):?>
							<span class="span-icon"><?=$arResult["PROPERTIES"]["TEXT_THREE"]["VALUE"]?></span>
						<?endif;?>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-2 icon-flex">
					<div class="col-3 col-sm-3 col-md-12 col-lg-12 col-xl-12 ">
						<?if(is_array($arResult["PROPERTIES"]["PHOTO_FOUR"])):?>
							<img
								border="0"
								src="<?=CFile::GetPath($arResult["PROPERTIES"]["PHOTO_FOUR"]["VALUE"])?>"
								alt="<?=$arResult["PROPERTIES"]["TEXT_FOUR"]["VALUE"]?>"
								title="<?=$arResult["PROPERTIES"]["TEXT_FOUR"]["VALUE"]?>"
								/>
						<?endif?>
					</div>
					<div class="col-9 col-sm-9 col-md-12 col-lg-12 col-xl-12 img-p">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_FOUR"])):?>
							<span class="span-icon"><?=$arResult["PROPERTIES"]["TEXT_FOUR"]["VALUE"]?></span>
						<?endif;?>
					</div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-2 icon-flex">
					<div class="col-3 col-sm-3 col-md-12 col-lg-12 col-xl-12 ">
						<?if(is_array($arResult["PROPERTIES"]["PHOTO_FIVE"])):?>
							<img
								border="0"
								src="<?=CFile::GetPath($arResult["PROPERTIES"]["PHOTO_FIVE"]["VALUE"])?>"
								alt="<?=$arResult["PROPERTIES"]["TEXT_FIVE"]["VALUE"]?>"
								title="<?=$arResult["PROPERTIES"]["TEXT_FIVE"]["VALUE"]?>"
								/>
						<?endif?>
					</div>
					<div class="col-9 col-sm-9 col-md-12 col-lg-12 col-xl-12 img-p">
						<?if(is_array($arResult["PROPERTIES"]["TEXT_FIVE"])):?>
							<span class="span-icon"><?=$arResult["PROPERTIES"]["TEXT_FIVE"]["VALUE"]?></span>
						<?endif;?>
					</div>
				</div>
		</div>
	</div>
<?endif;?>

