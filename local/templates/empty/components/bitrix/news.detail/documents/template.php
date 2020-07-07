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
$file = $arResult['PROPERTIES'];
?>

<? 

				//echo '<pre>'. print_r($arResult, true) .'</pre>';
				   echo '<pre>'. print_r($file, true) .'</pre>';  
  ?>
	<!-- <?=CFile::GetPath($arResult["PROPERTIES"]["PHOTO_THREE"]["VALUE"])?> -->
	<div class="row mx-6 py-4  mx-icon">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<?if($arResult['PROPERTIES']['NEED_H2']['VALUE_XML_ID'] == YES) :?>
				<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
					<h2 class="photo-text-down"><?=$arResult["NAME"]?></h2>
				<?endif;?>
			<?endif;?>
		</div>
		<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mx-icon-p flex-wrap d-flex">
				<?foreach ($file as $key => $val):?>
					<?if($val['PROPERTY_TYPE'] == S):?>
						<? $text ='<span class="span-icon">'.$val["VALUE"].'</span>'?>
					<?endif;?>
					<?if($val['PROPERTY_TYPE'] == F):?>
							<?if($val['VALUE']):?>
								<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex pb-3">
									<div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 ">
										<svg width="22" height="31" viewBox="0 0 22 31" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="1" y="1" width="20" height="23" rx="2" stroke="#F65E64" stroke-width="2"/>
											<path d="M6 7.5H13" stroke="#F65E64" stroke-width="2"/>
											<path d="M6 12.5H16" stroke="#F65E64" stroke-width="2"/>
											<path d="M6 17.5H16" stroke="#F65E64" stroke-width="2"/>
											<path d="M10 30H20" stroke="#F65E64" stroke-width="2"/>
										</svg>
									
									</div>
									<div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 ">
										<?=$text?>
									</div>
								</div>
							<?endif?>
						<?endif?>
				<?endforeach?>
		</div>
	</div>



	
