<?php
final class IANAMediaTypes extends Enum{
	public static
	//Application Media Types
	$App1DInterleavedParityfec,$App3GpdashQoeReportXml,$App3GppImsXml,$AppA2L,$AppActivemessage,$AppAltoCostmapJson,
	$AppAltoCostmapfilterJson,$AppAltoDirectoryJson,$AppAltoEndpointpropJson,$AppAltoEndpointpropparamsJson,$AppAltoEndpointcostJson,
	$AppAltoEndpointcostparamsJson,$AppAltoErrorJson,$AppAltoNetworkmapfilterJson,$AppAltoNetworkmapJson,$AppAml,$AppAndrewInset,
	$AppApplefile,$AppAtf,$AppAtfx,$AppAtomXml,$AppAtomcatXml,$AppAtomdeletedXml,$AppAtomicmail,$AppAtomsvcXml,$AppAtxml,$AppAuthPolicyXml,
	$AppBacnetXddZip,$AppBatchSmtp,$AppBeepXml,$AppCalendarJson,$AppCalendarXml,$AppCallCompletion,$AppCals1840,$AppCbor,$AppCcmpXml,
	$AppCcxmlXml,$AppCdfxXml,$AppCdmiCapability,$AppCdmiContainer,$AppCdmiDomain,$AppCdmiObject,$AppCdmiQueue,$AppCea,$AppCea2018Xml,
	$AppCellmlXml,$AppCfw,$AppCms,$AppCnrpXml,$AppCoapGroupJson,$AppCommonground,$AppConferenceInfoXml,$AppCplXml,$AppCsrattrs,
	$AppCstaXml,$AppCstadataXml,$AppCybercash,$AppDashXml,$AppDashdelta,$AppDavmountXml,$AppDcaRft,$AppDcd,$AppDecDx,$AppDialogInfoXml,
	$AppDicom,$AppDii,$AppDit,$AppDns,$AppDskppXml,$AppDsscDer,$AppDsscXml,$AppDvcs,$AppEcmascript,$AppEdiConsent,$AppEdifact,$AppEdiX12,
	$AppEmmaXml,$AppEmotionmlXml,$AppEncaprtp,$AppEppXml,$AppEpubZip,$AppEshop,$AppExample,$AppExi,$AppFastinfoset,$AppFastsoap,$AppFdtXml,
	$AppFits,$AppFontSfnt,$AppFontTdpfr,$AppFontWoff,$AppFrameworkAttributesXml,$AppGzip,$AppH224,$AppHeldXml,$AppHttp,$AppHyperstudio,
	$AppIbeKeyRequestXml,$AppIbePkgReplyXml,$AppIbePpData,$AppIges,$AppImIscomposingXml,$AppIndex,$AppIndexCmd,$AppIndexObj,$AppIndexResponse,
	$AppIndexVnd,$AppInkmlXml,$AppIotp,$AppIpfix,$AppIpp,$AppIsup,$AppItsXml,$AppJavascript,$AppJose,$AppJoseJson,$AppJrdJson,$AppJson,
	$AppJsonPatchJson,$AppJsonSeq,$AppJwkJson,$AppJwkSetJson,$AppJwt,$AppKpmlRequestXml,$AppKpmlResponseXml,$AppLdJson,$AppLinkFormat,
	$AppLoadControlXml,$AppLostXml,$AppLostsyncXml,$AppLxf,$AppMacBinhex40,$AppMacwriteii,$AppMadsXml,$AppMarc,$AppMarcxmlXml,$AppMathematica,
	$AppMathmlContentXml,$AppMathmlPresentationXml,$AppMathmlXml,$AppMbmsAssociatedProcedureDescriptionXml,$AppMbmsDeregisterXml,$AppMbmsEnvelopeXml,
	$AppMbmsMskResponseXml,$AppMbmsMskXml,$AppMbmsProtectionDescriptionXml,$AppMbmsReceptionReportXml,$AppMbmsRegisterResponseXml,
	$AppMbmsRegisterXml,$AppMbmsScheduleXml,$AppMbmsUserServiceDescriptionXml,$AppMbox,$AppMediaControlXml,$AppMediaPolicyDatasetXml,
	$AppMediaservercontrolXml,$AppMergePatchJson,$AppMetalink4Xml,$AppMetsXml,$AppMf4,$AppMikey,$AppModsXml,$AppMossKeys,$AppMossSignature,
	$AppMosskeyData,$AppMosskeyRequest,$AppMp21,$AppMp4,$AppMpeg4Generic,$AppMpeg4Iod,$AppMpeg4IodXmt,$AppMrbConsumerXml,$AppMrbPublishXml,
	$AppMscIvrXml,$AppMscMixerXml,$AppMsword,$AppMxf,$AppNasdata,$AppNewsCheckgroups,$AppNewsGroupinfo,$AppNewsTransmission,$AppNlsmlXml,
	$AppNss,$AppOcspRequest,$AppOcspResponse,$AppOctetStream,$AppOda,$AppOdx,$AppOebpsPackageXml,$AppOgg,$AppOxps,$AppP2POverlayXml,
	$AppParityfec,$AppPatchOpsErrorXml,$AppPdf,$AppPdx,$AppPgpEncrypted,$AppPgpKeys,$AppPgpSignature,$AppPidfDiffXml,$AppPidfXml,
	$AppPkcs10,$AppPkcs7Mime,$AppPkcs7Signature,$AppPkcs8,$AppPkixAttrCert,$AppPkixCert,$AppPkixCrl,$AppPkixPkipath,$AppPkixcmp,
	$AppPlsXml,$AppPocSettingsXml,$AppPostscript,$AppProvenanceXml,$AppPrsAlvestrandTitraxSheet,$AppPrsCww,$AppPrsHpubZip,$AppPrsNprend,
	$AppPrsPlucker,$AppPrsRdfXmlCrypt,$AppPrsXsfXml,$AppPskcXml,$AppRdfXml,$AppQsig,$AppRaptorfec,$AppRdapJson,$AppReginfoXml,
	$AppRelaxNgCompactSyntax,$AppRemotePrinting,$AppReputonJson,$AppResourceListsDiffXml,$AppResourceListsXml,$AppRiscos,$AppRlmiXml,
	$AppRlsServicesXml,$AppRpkiGhostbusters,$AppRpkiManifest,$AppRpkiRoa,$AppRpkiUpdown,$AppRtf,$AppRtploopback,$AppRtx,
	$AppSamlassertionXml,$AppSamlmetadataXml,$AppSbmlXml,$AppScaipXml,$AppScimJson,$AppScvpCvRequest,$AppScvpCvResponse,$AppScvpVpRequest,
	$AppScvpVpResponse,$AppSdp,$AppSepExi,$AppSepXml,$AppSessionInfo,$AppSetPayment,$AppSetPaymentInitiation,$AppSetRegistration,
	$AppSetRegistrationInitiation,$AppSgml,$AppSgmlOpenCatalog,$AppShfXml,$AppSieve,$AppSimpleFilterXml,$AppSimpleMessageSummary,
	$AppSimplesymbolcontainer,$AppSlate,$AppSmilObsoletedInFavorOfApplicationSmilXml,$AppSmilXml,$AppSmpte336M,$AppSoapFastinfoset,
	$AppSoapXml,$AppSparqlQuery,$AppSparqlResultsXml,$AppSpiritsEventXml,$AppSql,$AppSrgs,$AppSrgsXml,$AppSruXml,$AppSsmlXml,
	$AppTampApexUpdate,$AppTampApexUpdateConfirm,$AppTampCommunityUpdate,$AppTampCommunityUpdateConfirm,$AppTampError,
	$AppTampSequenceAdjust,$AppTampSequenceAdjustConfirm,$AppTampStatusQuery,$AppTampStatusResponse,$AppTampUpdate,$AppTampUpdateConfirm,
	$AppTeiXml,$AppThraudXml,$AppTimestampQuery,$AppTimestampReply,$AppTimestampedData,$AppTtmlXml,$AppTveTrigger,$AppUlpfec,
	$AppUrcGrpsheetXml,$AppUrcRessheetXml,$AppUrcTargetdescXml,$AppUrcUisocketdescXml,$AppVcardJson,$AppVcardXml,$AppVemmi,
	$AppVnd3GppBsfXml,$AppVnd3GppPicBwLarge,$AppVnd3GppPicBwSmall,$AppVnd3GppPicBwVar,$AppVnd3GppSms,$AppVnd3GppUssdXml,
	$AppVnd3Gpp2BcmcsinfoXml,$AppVnd3Gpp2Sms,$AppVnd3Gpp2Tcap,$AppVnd3MPostItNotes,$AppVndAccpacSimplyAso,$AppVndAccpacSimplyImp,
	$AppVndAcucobol,$AppVndAcucorp,$AppVndAdobeFlashMovie,$AppVndAdobeFormscentralFcdt,$AppVndAdobeFxp,$AppVndAdobePartialUpload,
	$AppVndAdobeXdpXml,$AppVndAdobeXfdf,$AppVndAetherImp,$AppVndAhBarcode,$AppVndAheadSpace,$AppVndAirzipFilesecureAzf,
	$AppVndAirzipFilesecureAzs,$AppVndAmericandynamicsAcc,$AppVndAmigaAmi,$AppVndAmundsenMazeXml,$AppVndAnserWebCertificateIssueInitiation,
	$AppVndAntixGameComponent,$AppVndApacheThriftBinary,$AppVndApacheThriftCompact,$AppVndApacheThriftJson,$AppVndApiJson,
	$AppVndAppleMpegurl,$AppVndAppleInstallerXml,$AppVndArastraSwiObsoletedInFavorOfApplicationVndAristanetworksSwi,$AppVndAristanetworksSwi,
	$AppVndArtsquare,$AppVndAstraeaSoftwareIota,$AppVndAudiograph,$AppVndAutopackage,$AppVndAvistarXml,$AppVndBalsamiqBmmlXml,
	$AppVndBalsamiqBmpr,$AppVndBekitzurStechJson,$AppVndBiopaxRdfXml,$AppVndBlueiceMultipass,$AppVndBluetoothEpOob,$AppVndBluetoothLeOob,
	$AppVndBmi,$AppVndBusinessobjects,$AppVndCabJscript,$AppVndCanonCpdl,$AppVndCanonLips,$AppVndCendioThinlincClientconf,
	$AppVndCenturySystemsTcpStream,$AppVndChemdrawXml,$AppVndChipnutsKaraokeMmd,$AppVndCinderella,$AppVndCirpackIsdnExt,
	$AppVndCitationstylesStyleXml,$AppVndClaymore,$AppVndCloantoRp9,$AppVndClonkC4Group,$AppVndCluetrustCartomobileConfig,
	$AppVndCluetrustCartomobileConfigPkg,$AppVndCoffeescript,$AppVndCollectionDocJson,$AppVndCollectionJson,$AppVndCollectionNextJson,
	$AppVndCommerceBattelle,$AppVndCommonspace,$AppVndCosmocaller,$AppVndContactCmsg,$AppVndCrickClicker,$AppVndCrickClickerKeyboard,
	$AppVndCrickClickerPalette,$AppVndCrickClickerTemplate,$AppVndCrickClickerWordbank,$AppVndCriticaltoolsWbsXml,$AppVndCtcPosml,
	$AppVndCtctWsXml,$AppVndCupsPdf,$AppVndCupsPostscript,$AppVndCupsPpd,$AppVndCupsRaster,$AppVndCupsRaw,$AppVndCurl,$AppVndCyanDeanRootXml,
	$AppVndCybank,$AppVndDart,$AppVndDataVisionRdz,$AppVndDebianBinaryPackage,$AppVndDeceData,$AppVndDeceTtmlXml,$AppVndDeceUnspecified,
	$AppVndDeceZip,$AppVndDenovoFcselayoutLink,$AppVndDesmumeMovie,$AppVndDirBiPlateDlNosuffix,$AppVndDmDelegationXml,$AppVndDna,
	$AppVndDocumentJson,$AppVndDolbyMobile1,$AppVndDolbyMobile2,$AppVndDoremirScorecloudBinaryDocument,$AppVndDpgraph,$AppVndDreamfactory,
	$AppVndDtgLocal,$AppVndDtgLocalFlash,$AppVndDtgLocalHtml,$AppVndDvbAit,$AppVndDvbDvbj,$AppVndDvbEsgcontainer,
	$AppVndDvbIpdcdftnotifaccess,$AppVndDvbIpdcesgaccess,$AppVndDvbIpdcesgaccess2,$AppVndDvbIpdcesgpdd,$AppVndDvbIpdcroaming,
	$AppVndDvbIptvAlfecBase,$AppVndDvbIptvAlfecEnhancement,$AppVndDvbNotifAggregateRootXml,$AppVndDvbNotifContainerXml,
	$AppVndDvbNotifGenericXml,$AppVndDvbNotifIaMsglistXml,$AppVndDvbNotifIaRegistrationRequestXml,$AppVndDvbNotifIaRegistrationResponseXml,
	$AppVndDvbNotifInitXml,$AppVndDvbPfr,$AppVndDvbService,$AppVndDxr,$AppVndDynageo,$AppVndDzr,$AppVndEasykaraokeCdgdownload,
	$AppVndEcdisUpdate,$AppVndEcowinChart,$AppVndEcowinFilerequest,$AppVndEcowinFileupdate,$AppVndEcowinSeries,$AppVndEcowinSeriesrequest,
	$AppVndEcowinSeriesupdate,$AppVndEmclientAccessrequestXml,$AppVndEnliven,$AppVndEnphaseEnvoy,$AppVndEprintsDataXml,$AppVndEpsonEsf,
	$AppVndEpsonMsf,$AppVndEpsonQuickanime,$AppVndEpsonSalt,$AppVndEpsonSsf,$AppVndEricssonQuickcall,$AppVndEszigno3Xml,$AppVndEtsiAocXml,
	$AppVndEtsiAsicSZip,$AppVndEtsiAsicEZip,$AppVndEtsiCugXml,$AppVndEtsiIptvcommandXml,$AppVndEtsiIptvdiscoveryXml,
	$AppVndEtsiIptvprofileXml,$AppVndEtsiIptvsadBcXml,$AppVndEtsiIptvsadCodXml,$AppVndEtsiIptvsadNpvrXml,$AppVndEtsiIptvserviceXml,
	$AppVndEtsiIptvsyncXml,$AppVndEtsiIptvueprofileXml,$AppVndEtsiMcidXml,$AppVndEtsiMheg5,$AppVndEtsiOverloadControlPolicyDatasetXml,
	$AppVndEtsiPstnXml,$AppVndEtsiSciXml,$AppVndEtsiSimservsXml,$AppVndEtsiTimestampToken,$AppVndEtsiTslXml,$AppVndEtsiTslDer,
	$AppVndEudoraData,$AppVndEzpixAlbum,$AppVndEzpixPackage,$AppVndFSecureMobile,$AppVndFastcopyDiskImage,$AppVndFdf,$AppVndFdsnMseed,
	$AppVndFdsnSeed,$AppVndFfsns,$AppVndFints,$AppVndFlographit,$AppVndFluxtimeClip,$AppVndFontFontforgeSfd,$AppVndFramemaker,
	$AppVndFrogansFnc,$AppVndFrogansLtf,$AppVndFscWeblaunch,$AppVndFujitsuOasys,$AppVndFujitsuOasys2,$AppVndFujitsuOasys3,
	$AppVndFujitsuOasysgp,$AppVndFujitsuOasysprs,$AppVndFujixeroxArt4,$AppVndFujixeroxArtEx,$AppVndFujixeroxDdd,
	$AppVndFujixeroxDocuworks,$AppVndFujixeroxDocuworksBinder,$AppVndFujixeroxDocuworksContainer,$AppVndFujixeroxHbpl,$AppVndFutMisnet,
	$AppVndFuzzysheet,$AppVndGenomatixTuxedo,$AppVndGeoJson,$AppVndGeocubeXmlObsoletedByRequest,$AppVndGeogebraFile,$AppVndGeogebraTool,
	$AppVndGeometryExplorer,$AppVndGeonext,$AppVndGeoplan,$AppVndGeospace,$AppVndGerber,$AppVndGlobalplatformCardContentMgt,
	$AppVndGlobalplatformCardContentMgtResponse,$AppVndGmxDeprecated,$AppVndGoogleEarthKmlXml,$AppVndGoogleEarthKmz,$AppVndGovSkEFormXml,
	$AppVndGovSkEFormZip,$AppVndGovSkXmldatacontainerXml,$AppVndGrafeq,$AppVndGridmp,$AppVndGrooveAccount,$AppVndGrooveHelp,
	$AppVndGrooveIdentityMessage,$AppVndGrooveInjector,$AppVndGrooveToolMessage,$AppVndGrooveToolTemplate,$AppVndGrooveVcard,$AppVndHalJson,
	$AppVndHalXml,$AppVndHandheldEntertainmentXml,$AppVndHbci,$AppVndHclBireports,$AppVndHerokuJson,$AppVndHheLessonPlayer,$AppVndHpHpgl,
	$AppVndHpHpid,$AppVndHpHps,$AppVndHpJlyt,$AppVndHpPcl,$AppVndHpPclxl,$AppVndHttphone,$AppVndHydrostatixSofData,$AppVndHyperdriveJson,
	$AppVndHzn3DCrossword,$AppVndIbmAfplinedata,$AppVndIbmElectronicMedia,$AppVndIbmMinipay,$AppVndIbmModcap,$AppVndIbmRightsManagement,
	$AppVndIbmSecureContainer,$AppVndIccprofile,$AppVndIeee1905,$AppVndIgloader,$AppVndImmervisionIvp,$AppVndImmervisionIvu,
	$AppVndImsImsccv1P1,$AppVndImsImsccv1P2,$AppVndImsImsccv1P3,$AppVndImsLisV2ResultJson,$AppVndImsLtiV2ToolconsumerprofileJson,
	$AppVndImsLtiV2ToolproxyIdJson,$AppVndImsLtiV2ToolproxyJson,$AppVndImsLtiV2ToolsettingsJson,$AppVndImsLtiV2ToolsettingsSimpleJson,
	$AppVndInformedcontrolRmsXml,$AppVndInfotechProject,$AppVndInfotechProjectXml,
	$AppVndInformixVisionaryObsoletedInFavorOfApplicationVndVisionary,$AppVndInnopathWampNotification,$AppVndInsorsIgm,
	$AppVndInterconFormnet,$AppVndIntergeo,$AppVndIntertrustDigibox,$AppVndIntertrustNncp,$AppVndIntuQbo,$AppVndIntuQfx,
	$AppVndIptcG2CatalogitemXml,$AppVndIptcG2ConceptitemXml,$AppVndIptcG2KnowledgeitemXml,$AppVndIptcG2NewsitemXml,
	$AppVndIptcG2NewsmessageXml,$AppVndIptcG2PackageitemXml,$AppVndIptcG2PlanningitemXml,$AppVndIpunpluggedRcprofile,
	$AppVndIrepositoryPackageXml,$AppVndIsXpr,$AppVndIsacFcs,$AppVndJam,$AppVndJapannetDirectoryService,$AppVndJapannetJpnstoreWakeup,
	$AppVndJapannetPaymentWakeup,$AppVndJapannetRegistration,$AppVndJapannetRegistrationWakeup,$AppVndJapannetSetstoreWakeup,
	$AppVndJapannetVerification,$AppVndJapannetVerificationWakeup,$AppVndJcpJavameMidletRms,$AppVndJisp,$AppVndJoostJodaArchive,
	$AppVndJskIsdnNgn,$AppVndKahootz,$AppVndKdeKarbon,$AppVndKdeKchart,$AppVndKdeKformula,$AppVndKdeKivio,$AppVndKdeKontour,
	$AppVndKdeKpresenter,$AppVndKdeKspread,$AppVndKdeKword,$AppVndKenameaapp,$AppVndKidspiration,$AppVndKinar,$AppVndKoan,
	$AppVndKodakDescriptor,$AppVndLasLasXml,$AppVndLibertyRequestXml,$AppVndLlamagraphicsLifeBalanceDesktop,
	$AppVndLlamagraphicsLifeBalanceExchangeXml,$AppVndLotus123,$AppVndLotusApproach,$AppVndLotusFreelance,$AppVndLotusNotes,
	$AppVndLotusOrganizer,$AppVndLotusScreencam,$AppVndLotusWordpro,$AppVndMacportsPortpkg,$AppVndMarlinDrmActiontokenXml,
	$AppVndMarlinDrmConftokenXml,$AppVndMarlinDrmLicenseXml,$AppVndMarlinDrmMdcf,$AppVndMasonJson,$AppVndMaxmindMaxmindDb,$AppVndMcd,
	$AppVndMedcalcdata,$AppVndMediastationCdkey,$AppVndMeridianSlingshot,$AppVndMfer,$AppVndMfmp,$AppVndMicroJson,$AppVndMicrografxFlo,
	$AppVndMicrografxIgx,$AppVndMicrosoftPortableExecutable,$AppVndMieleJson,$AppVndMif,$AppVndMinisoftHp3000Save
	,$AppVndMitsubishiMistyGuardTrustweb,$AppVndMobiusDaf,$AppVndMobiusDis,$AppVndMobiusMbk,$AppVndMobiusMqy,$AppVndMobiusMsl,
	$AppVndMobiusPlc,$AppVndMobiusTxf,$AppVndMophunApplication,$AppVndMophunCertificate,$AppVndMotorolaFlexsuite,
	$AppVndMotorolaFlexsuiteAdsi,$AppVndMotorolaFlexsuiteFis,$AppVndMotorolaFlexsuiteGotap,$AppVndMotorolaFlexsuiteKmr,
	$AppVndMotorolaFlexsuiteTtc,$AppVndMotorolaFlexsuiteWem,$AppVndMotorolaIprm,$AppVndMozillaXulXml,$AppVndMsArtgalry,$AppVndMsAsf,
	$AppVndMsCabCompressed,$AppVndMs3Mfdocument,$AppVndMsExcel,$AppVndMsExcelAddinMacroenabled12,$AppVndMsExcelSheetBinaryMacroenabled12,
	$AppVndMsExcelSheetMacroenabled12,$AppVndMsExcelTemplateMacroenabled12,$AppVndMsFontobject,$AppVndMsHtmlhelp,$AppVndMsIms,$AppVndMsLrm,
	$AppVndMsOfficeActivexXml,$AppVndMsOfficetheme,$AppVndMsPlayreadyInitiatorXml,$AppVndMsPowerpoint,$AppVndMsPowerpointAddinMacroenabled12,
	$AppVndMsPowerpointPresentationMacroenabled12,$AppVndMsPowerpointSlideMacroenabled12,$AppVndMsPowerpointSlideshowMacroenabled12,
	$AppVndMsPowerpointTemplateMacroenabled12,$AppVndMsProject,$AppVndMsTnef,$AppVndMsWindowsPrinterpairing,$AppVndMsWmdrmLicChlgReq,
	$AppVndMsWmdrmLicResp,$AppVndMsWmdrmMeterChlgReq,$AppVndMsWmdrmMeterResp,$AppVndMsWordDocumentMacroenabled12,
	$AppVndMsWordTemplateMacroenabled12,$AppVndMsWorks,$AppVndMsWpl,$AppVndMsXpsdocument,$AppVndMsaDiskImage,$AppVndMseq,$AppVndMsign,
	$AppVndMultiadCreator,$AppVndMultiadCreatorCif,$AppVndMusician,$AppVndMusicNiff,$AppVndMuveeStyle,$AppVndMynfc,$AppVndNcdControl,
	$AppVndNcdReference,$AppVndNervana,$AppVndNetfpx,$AppVndNeurolanguageNlu,$AppVndNintendoSnesRom,$AppVndNintendoNitroRom,$AppVndNitf,
	$AppVndNoblenetDirectory,$AppVndNoblenetSealer,$AppVndNoblenetWeb,$AppVndNokiaCatalogs,$AppVndNokiaConmlWbxml,$AppVndNokiaConmlXml,
	$AppVndNokiaIptvConfigXml,$AppVndNokiaIsdsRadioPresets,$AppVndNokiaLandmarkWbxml,$AppVndNokiaLandmarkXml,
	$AppVndNokiaLandmarkcollectionXml,$AppVndNokiaNcd,$AppVndNokiaNGageAcXml,$AppVndNokiaNGageData,
	$AppVndNokiaNGageSymbianInstallObsoleteNoReplacementGiven,$AppVndNokiaPcdWbxml,$AppVndNokiaPcdXml,$AppVndNokiaRadioPreset,
	$AppVndNokiaRadioPresets,$AppVndNovadigmEdm,$AppVndNovadigmEdx,$AppVndNovadigmExt,$AppVndNttLocalContentShare,
	$AppVndNttLocalFileTransfer,$AppVndNttLocalOgwRemoteAccess,$AppVndNttLocalSipTaRemote,$AppVndNttLocalSipTaTcpStream,
	$AppVndOasisOpendocumentChart,$AppVndOasisOpendocumentChartTemplate,$AppVndOasisOpendocumentDatabase,$AppVndOasisOpendocumentFormula,
	$AppVndOasisOpendocumentFormulaTemplate,$AppVndOasisOpendocumentGraphics,$AppVndOasisOpendocumentGraphicsTemplate,
	$AppVndOasisOpendocumentImage,$AppVndOasisOpendocumentImageTemplate,$AppVndOasisOpendocumentPresentation,
	$AppVndOasisOpendocumentPresentationTemplate,$AppVndOasisOpendocumentSpreadsheet,$AppVndOasisOpendocumentSpreadsheetTemplate,
	$AppVndOasisOpendocumentText,$AppVndOasisOpendocumentTextMaster,$AppVndOasisOpendocumentTextTemplate,$AppVndOasisOpendocumentTextWeb,
	$AppVndObn,$AppVndOftnL10NJson,$AppVndOipfContentaccessdownloadXml,$AppVndOipfContentaccessstreamingXml,$AppVndOipfCspgHexbinary,
	$AppVndOipfDaeSvgXml,$AppVndOipfDaeXhtmlXml,$AppVndOipfMippvcontrolmessageXml,$AppVndOipfPaeGem,$AppVndOipfSpdiscoveryXml,
	$AppVndOipfSpdlistXml,$AppVndOipfUeprofileXml,$AppVndOipfUserprofileXml,$AppVndOlpcSugar,$AppVndOmaBcastAssociatedProcedureParameterXml,
	$AppVndOmaBcastDrmTriggerXml,$AppVndOmaBcastImdXml,$AppVndOmaBcastLtkm,$AppVndOmaBcastNotificationXml,$AppVndOmaBcastProvisioningtrigger,
	$AppVndOmaBcastSgboot,$AppVndOmaBcastSgddXml,$AppVndOmaBcastSgdu,$AppVndOmaBcastSimpleSymbolContainer,$AppVndOmaBcastSmartcardTriggerXml,
	$AppVndOmaBcastSprovXml,$AppVndOmaBcastStkm,$AppVndOmaCabAddressBookXml,$AppVndOmaCabFeatureHandlerXml,$AppVndOmaCabPccXml,$AppVndOmaCabSubsInviteXml,
	$AppVndOmaCabUserPrefsXml,$AppVndOmaDcd,$AppVndOmaDcdc,$AppVndOmaDd2Xml,$AppVndOmaDrmRisdXml,$AppVndOmaGroupUsageListXml,$AppVndOmaPalXml,
	$AppVndOmaPocDetailedProgressReportXml,$AppVndOmaPocFinalReportXml,$AppVndOmaPocGroupsXml,$AppVndOmaPocInvocationDescriptorXml,$AppVndOmaPocOptimizedProgressReportXml,
	$AppVndOmaPush,$AppVndOmaScidmMessagesXml,$AppVndOmaXcapDirectoryXml,$AppVndOmadsEmailXml,$AppVndOmadsFileXml,$AppVndOmadsFolderXml,
	$AppVndOmalocSuplInit,$AppVndOmaScwsConfig,$AppVndOmaScwsHttpRequest,$AppVndOmaScwsHttpResponse,$AppVndOpeneyeOeb,$AppVndOpenxmlformatsOfficedocumentCustomPropertiesXml,
	$AppVndOpenxmlformatsOfficedocumentCustomxmlpropertiesXml,$AppVndOpenxmlformatsOfficedocumentDrawingXml,$AppVndOpenxmlformatsOfficedocumentDrawingmlChartXml,
	$AppVndOpenxmlformatsOfficedocumentDrawingmlChartshapesXml,$AppVndOpenxmlformatsOfficedocumentDrawingmlDiagramcolorsXml,$AppVndOpenxmlformatsOfficedocumentDrawingmlDiagramdataXml,
	$AppVndOpenxmlformatsOfficedocumentDrawingmlDiagramlayoutXml,$AppVndOpenxmlformatsOfficedocumentDrawingmlDiagramstyleXml,$AppVndOpenxmlformatsOfficedocumentExtendedPropertiesXml,
	$AppVndOpenxmlformatsOfficedocumentPresentationmlCommentauthorsXml,$AppVndOpenxmlformatsOfficedocumentPresentationmlCommentsXml,$AppVndOpenxmlformatsOfficedocumentPresentationmlHandoutmasterXml,
	$AppVndOpenxmlformatsOfficedocumentPresentationmlNotesmasterXml,$AppVndOpenxmlformatsOfficedocumentPresentationmlNotesslideXml,$AppVndOpenxmlformatsOfficedocumentPresentationmlPresentation,
	$AppVndOpenxmlformatsOfficedocumentPresentationmlPresentationMainXml,$AppVndOpenxmlformatsOfficedocumentPresentationmlPrespropsXml,$AppVndOpenxmlformatsOfficedocumentPresentationmlSlide,
	$AppVndOpenxmlformatsOfficedocumentPresentationmlSlideXml,$AppVndOpenxmlformatsOfficedocumentPresentationmlSlidelayoutXml,$AppVndOpenxmlformatsOfficedocumentPresentationmlSlidemasterXml,
	$AppVndOpenxmlformatsOfficedocumentPresentationmlSlideshow,$AppVndOpenxmlformatsOfficedocumentPresentationmlSlideshowMainXml,$AppVndOpenxmlformatsOfficedocumentPresentationmlSlideupdateinfoXml,
	$AppVndOpenxmlformatsOfficedocumentPresentationmlTablestylesXml,$AppVndOpenxmlformatsOfficedocumentPresentationmlTagsXml,$AppVndOpenxmlformatsOfficedocumentPresentationmlTemplate,
	$AppVndOpenxmlformatsOfficedocumentPresentationmlTemplateMainXml,$AppVndOpenxmlformatsOfficedocumentPresentationmlViewpropsXml,$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlCalcchainXml,
	$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlChartsheetXml,$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlCommentsXml,$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlConnectionsXml,
	$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlDialogsheetXml,$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlExternallinkXml,$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlPivotcachedefinitionXml,
	$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlPivotcacherecordsXml,$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlPivottableXml,$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlQuerytableXml,
	$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlRevisionheadersXml,$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlRevisionlogXml,$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlSharedstringsXml,
	$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlSheet,$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlSheetMainXml,$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlSheetmetadataXml,
	$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlStylesXml,$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlTableXml,$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlTablesinglecellsXml,
	$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlTemplate,$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlTemplateMainXml,$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlUsernamesXml,
	$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlVolatiledependenciesXml,$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlWorksheetXml,$AppVndOpenxmlformatsOfficedocumentThemeXml,
	$AppVndOpenxmlformatsOfficedocumentThemeoverrideXml,$AppVndOpenxmlformatsOfficedocumentVmldrawing,$AppVndOpenxmlformatsOfficedocumentWordprocessingmlCommentsXml,
	$AppVndOpenxmlformatsOfficedocumentWordprocessingmlDocument,$AppVndOpenxmlformatsOfficedocumentWordprocessingmlDocumentGlossaryXml,$AppVndOpenxmlformatsOfficedocumentWordprocessingmlDocumentMainXml,
	$AppVndOpenxmlformatsOfficedocumentWordprocessingmlEndnotesXml,$AppVndOpenxmlformatsOfficedocumentWordprocessingmlFonttableXml,$AppVndOpenxmlformatsOfficedocumentWordprocessingmlFooterXml,
	$AppVndOpenxmlformatsOfficedocumentWordprocessingmlFootnotesXml,$AppVndOpenxmlformatsOfficedocumentWordprocessingmlNumberingXml,$AppVndOpenxmlformatsOfficedocumentWordprocessingmlSettingsXml,
	$AppVndOpenxmlformatsOfficedocumentWordprocessingmlStylesXml,$AppVndOpenxmlformatsOfficedocumentWordprocessingmlTemplate,$AppVndOpenxmlformatsOfficedocumentWordprocessingmlTemplateMainXml,
	$AppVndOpenxmlformatsOfficedocumentWordprocessingmlWebsettingsXml,$AppVndOpenxmlformatsPackageCorePropertiesXml,$AppVndOpenxmlformatsPackageDigitalSignatureXmlsignatureXml,
	$AppVndOpenxmlformatsPackageRelationshipsXml,$AppVndOracleResourceJson,$AppVndOrangeIndata,$AppVndOsaNetdeploy,$AppVndOsgeoMapguidePackage,$AppVndOsgiBundle,
	$AppVndOsgiDp,$AppVndOsgiSubsystem,$AppVndOtpsCtKipXml,$AppVndPalm,$AppVndPanoply,$AppVndPaosXml,$AppVndPawaafile,$AppVndPcos,$AppVndPgFormat,
	$AppVndPgOsasli,$AppVndPiaccessApplicationLicence,$AppVndPicsel,$AppVndPmiWidget,$AppVndPocGroupAdvertisementXml,$AppVndPocketlearn,$AppVndPowerbuilder6,
	$AppVndPowerbuilder6S,$AppVndPowerbuilder7,$AppVndPowerbuilder75,$AppVndPowerbuilder75S,$AppVndPowerbuilder7S,$AppVndPreminet,$AppVndPreviewsystemsBox,
	$AppVndProteusMagazine,$AppVndPublishareDeltaTree,$AppVndPviPtid1,$AppVndPwgMultiplexed,$AppVndPwgXhtmlPrintXml,$AppVndQualcommBrewAppRes,
	$AppVndQuarkQuarkxpress,$AppVndQuobjectQuoxdocument,$AppVndRadisysMomlXml,$AppVndRadisysMsmlAuditConfXml,$AppVndRadisysMsmlAuditConnXml,
	$AppVndRadisysMsmlAuditDialogXml,$AppVndRadisysMsmlAuditStreamXml,$AppVndRadisysMsmlAuditXml,$AppVndRadisysMsmlConfXml,$AppVndRadisysMsmlDialogBaseXml,
	$AppVndRadisysMsmlDialogFaxDetectXml,$AppVndRadisysMsmlDialogFaxSendrecvXml,$AppVndRadisysMsmlDialogGroupXml,$AppVndRadisysMsmlDialogSpeechXml,
	$AppVndRadisysMsmlDialogTransformXml,$AppVndRadisysMsmlDialogXml,$AppVndRadisysMsmlXml,$AppVndRainstorData,$AppVndRapid,$AppVndRealvncBed,
	$AppVndRecordareMusicxml,$AppVndRecordareMusicxmlXml,$AppVndRenlearnRlprint,$AppVndRigCryptonote,$AppVndRoute66Link66Xml,$AppVndRs274X,
	$AppVndRuckusDownload,$AppVndS3Sms,$AppVndSailingtrackerTrack,$AppVndSbmCid,$AppVndSbmMid2,$AppVndScribus,$AppVndSealed3Df,$AppVndSealedCsf,
	$AppVndSealedDoc,$AppVndSealedEml,$AppVndSealedMht,$AppVndSealedNet,$AppVndSealedPpt,$AppVndSealedTiff,$AppVndSealedXls,$AppVndSealedmediaSoftsealHtml,
	$AppVndSealedmediaSoftsealPdf,$AppVndSeemail,$AppVndSema,$AppVndSemd,$AppVndSemf,$AppVndShanaInformedFormdata,$AppVndShanaInformedFormtemplate,
	$AppVndShanaInformedInterchange,$AppVndShanaInformedPackage,$AppVndSimtechMindmapper,$AppVndSirenJson,$AppVndSmaf,$AppVndSmartNotebook,$AppVndSmartTeacher,
	$AppVndSoftware602FillerFormXml,$AppVndSoftware602FillerFormXmlZip,$AppVndSolentSdkmXml,$AppVndSpotfireDxp,$AppVndSpotfireSfs,$AppVndSssCod,
	$AppVndSssDtf,$AppVndSssNtf,$AppVndStepmaniaPackage,$AppVndStepmaniaStepchart,$AppVndStreetStream,$AppVndSunWadlXml,$AppVndSusCalendar,
	$AppVndSvd,$AppVndSwiftviewIcs,$AppVndSyncmlDmNotification,$AppVndSyncmlDmddfXml,$AppVndSyncmlDmtndsWbxml,$AppVndSyncmlDmtndsXml,$AppVndSyncmlDmddfWbxml,
	$AppVndSyncmlDmWbxml,$AppVndSyncmlDmXml,$AppVndSyncmlDsNotification,$AppVndSyncmlXml,$AppVndTaoIntentModuleArchive,$AppVndTcpdumpPcap,
	$AppVndTmdMediaflexApiXml,$AppVndTmobileLivetv,$AppVndTridTpt,$AppVndTriscapeMxs,$AppVndTrueapp,$AppVndTruedoc,$AppVndUbisoftWebplayer,
	$AppVndUfdl,$AppVndUiqTheme,$AppVndUmajin,$AppVndUnity,$AppVndUomlXml,$AppVndUplanetAlert,$AppVndUplanetAlertWbxml,$AppVndUplanetBearerChoice,
	$AppVndUplanetBearerChoiceWbxml,$AppVndUplanetCacheop,$AppVndUplanetCacheopWbxml,$AppVndUplanetChannel,$AppVndUplanetChannelWbxml,$AppVndUplanetList,
	$AppVndUplanetListcmd,$AppVndUplanetListcmdWbxml,$AppVndUplanetListWbxml,$AppVndUriMap,$AppVndUplanetSignal,$AppVndValveSourceMaterial,$AppVndVcx,
	$AppVndVdStudy,$AppVndVectorworks,$AppVndVerimatrixVcas,$AppVndVidsoftVidconference,$AppVndVisio,$AppVndVisionary,$AppVndVividenceScriptfile,
	$AppVndVsf,$AppVndWapSic,$AppVndWapSlc,$AppVndWapWbxml,$AppVndWapWmlc,$AppVndWapWmlscriptc,$AppVndWebturbo,$AppVndWfaP2P,$AppVndWfaWsc,$AppVndWindowsDevicepairing,
	$AppVndWmc,$AppVndWmfBootstrap,$AppVndWolframMathematica,$AppVndWolframMathematicaPackage,$AppVndWolframPlayer,$AppVndWordperfect,$AppVndWqd,
	$AppVndWrqHp3000Labelled,$AppVndWtStf,$AppVndWvCspXml,$AppVndWvCspWbxml,$AppVndWvSspXml,$AppVndXacmlJson,$AppVndXara,$AppVndXfdl,$AppVndXfdlWebform,
	$AppVndXmiXml,$AppVndXmpieCpkg,$AppVndXmpieDpkg,$AppVndXmpiePlan,$AppVndXmpiePpkg,$AppVndXmpieXlim,$AppVndYamahaHvDic,$AppVndYamahaHvScript,$AppVndYamahaHvVoice,
	$AppVndYamahaOpenscoreformatOsfpvgXml,$AppVndYamahaOpenscoreformat,$AppVndYamahaRemoteSetup,$AppVndYamahaSmafAudio,$AppVndYamahaSmafPhrase,
	$AppVndYamahaThroughNgn,$AppVndYamahaTunnelUdpencap,$AppVndYaoweme,$AppVndYellowriverCustomMenu,$AppVndZul,$AppVndZzazzDeckXml,$AppVoicexmlXml,
	$AppVqRtcpxr,$AppWatcherinfoXml,$AppWhoisppQuery,$AppWhoisppResponse,$AppWidget,$AppWita,$AppWordperfect51,$AppWsdlXml,$AppWspolicyXml,
	$AppXWwwFormUrlencoded,$AppX400Bp,$AppXacmlXml,$AppXcapAttXml,$AppXcapCapsXml,$AppXcapDiffXml,$AppXcapElXml,$AppXcapErrorXml,$AppXcapNsXml,
	$AppXconConferenceInfoDiffXml,$AppXconConferenceInfoXml,$AppXencXml,$AppXhtmlXml,$AppXml,$AppXmlDtd,$AppXmlExternalParsedEntity,
	$AppXmlPatchXml,$AppXmppXml,$AppXopXml,$AppXsltXml,$AppXvXml,$AppYang,$AppYinXml,$AppZip,$AppZlib,
	//Audio Media Types
	$Audio,$Aud1DInterleavedParityfec,$Aud32Kadpcm,$Aud3Gpp,$Aud3Gpp2,$AudAc3,$AudAmr,$AudAmrWb,$AudAmrWbPlus,$AudAptx,$AudAsc,
	$AudAtracAdvancedLossless,$AudAtracX,$AudAtrac3,$AudBasic,$AudBv16,$AudBv32,$AudClearmode,$AudCn,$AudDat12,$AudDls,$AudDsrEs201108,
	$AudDsrEs202050,$AudDsrEs202211,$AudDsrEs202212,$AudDv,$AudDvi4,$AudEac3,$AudEncaprtp,$AudEvrc,$AudEvrcQcp,$AudEvrc0,$AudEvrc1,
	$AudEvrcb,$AudEvrcb0,$AudEvrcb1,$AudEvrcnw,$AudEvrcnw0,$AudEvrcnw1,$AudEvrcwb,$AudEvrcwb0,$AudEvrcwb1,$AudExample,$AudFwdred,$AudG7110,
	$AudG719,$AudG7221,$AudG722,$AudG723,$AudG72616,$AudG72624,$AudG72632,$AudG72640,$AudG728,$AudG729,$AudG7291,$AudG729D,$AudG729E,$AudGsm,
	$AudGsmEfr,$AudGsmHr08,$AudIlbc,$AudIpMrV25,$AudL8,$AudL16,$AudL20,$AudL24,$AudLpc,$AudMobileXmf,$AudMpa,$AudMp4,$AudMp4ALatm,
	$AudMpaRobust,$AudMpeg,$AudMpeg4Generic,$AudOgg,$AudOpus,$AudParityfec,$AudPcma,$AudPcmaWb,$AudPcmu,$AudPcmuWb,$AudPrsSid,$AudQcelp,
	$AudRaptorfec,$AudRed,$AudRtpEncAescm128,$AudRtploopback,$AudRtpMidi,$AudRtx,$AudSmv,$AudSmv0,$AudSmvQcp,$AudSpMidi,$AudSpeex,$AudT140C,
	$AudT38,$AudTelephoneEvent,$AudTone,$AudUemclip,$AudUlpfec,$AudVdvi,$AudVmrWb,$AudVnd3GppIufp,$AudVnd4Sb,$AudVndAudiokoz,$AudVndCelp,
	$AudVndCiscoNse,$AudVndCmlesRadioEvents,$AudVndCnsAnp1,$AudVndCnsInf1,$AudVndDeceAudio,$AudVndDigitalWinds,$AudVndDlnaAdts,
	$AudVndDolbyHeaac1,$AudVndDolbyHeaac2,$AudVndDolbyMlp,$AudVndDolbyMps,$AudVndDolbyPl2,$AudVndDolbyPl2X,$AudVndDolbyPl2Z,
	$AudVndDolbyPulse1,$AudVndDra,$AudVndDts,$AudVndDtsHd,$AudVndDvbFile,$AudVndEveradPlj,$AudVndHnsAudio,$AudVndLucentVoice,
	$AudVndMsPlayreadyMediaPya,$AudVndNokiaMobileXmf,$AudVndNortelVbk,$AudVndNueraEcelp4800,$AudVndNueraEcelp7470,$AudVndNueraEcelp9600,
	$AudVndOctelSbc,$AudVndQcelpDeprecatedInFavorOfAudioQcelp,$AudVndRhetorex32Kadpcm,$AudVndRip,$AudVndSealedmediaSoftsealMpeg,
	$AudVndVmxCvsd,$AudVorbis,$AudVorbisConfig,
	//Image Media Types
	$Image,$ImgCgm,$ImgExample,$ImgFits,$ImgG3Fax,$ImgGif,$ImgIef,$ImgJp2,$ImgJpeg,$ImgJpm,$ImgJpx,$ImgKtx,$ImgNaplps,$ImgPng,
	$ImgPrsBtif,$ImgPrsPti,$ImgPwgRaster,$ImgSvgXml,$ImgT38,$ImgTiff,$ImgTiffFx,$ImgVndAdobePhotoshop,$ImgVndAirzipAcceleratorAzv,
	$ImgVndCnsInf2,$ImgVndDeceGraphic,$ImgVndDjvu,$ImgVndDwg,$ImgVndDxf,$ImgVndDvbSubtitle,$ImgVndFastbidsheet,$ImgVndFpx,$ImgVndFst,
	$ImgVndFujixeroxEdmicsMmr,$ImgVndFujixeroxEdmicsRlc,$ImgVndGlobalgraphicsPgb,$ImgVndMicrosoftIcon,$ImgVndMix,$ImgVndMsModi,
	$ImgVndMozillaApng,$ImgVndNetFpx,$ImgVndRadiance,$ImgVndSealedPng,$ImgVndSealedmediaSoftsealGif,$ImgVndSealedmediaSoftsealJpg,
	$ImgVndSvf,$ImgVndTencentTap,$ImgVndValveSourceTexture,$ImgVndWapWbmp,$ImgVndXiff,$ImgVndZbrushPcx,
	//Message Media Types
	$Message,$MsgCpim,$MsgDeliveryStatus,$MsgDispositionNotification,$MsgExample,$MsgExternalBody,$MsgFeedbackReport,$MsgGlobal,
	$MsgGlobalDeliveryStatus,$MsgGlobalDispositionNotification,$MsgGlobalHeaders,$MsgHttp,$MsgImdnXml,$MsgNewsObsoletedByRfc5537,
	$MsgPartial,$MsgRfc822,$MsgSHttp,$MsgSip,$MsgSipfrag,$MsgTrackingStatus,$MsgVndSiSimpObsoletedByRequest,$MsgVndWfaWsc,
	//Model Media Types
	$Model,$ModExample,$ModIges,$ModMesh,$ModVndColladaXml,$ModVndDwf,$ModVndFlatland3Dml,$ModVndGdl,$ModVndGsGdl,$ModVndGtw,
	$ModVndMomlXml,$ModVndMts,$ModVndOpengex,$ModVndParasolidTransmitBinary,$ModVndParasolidTransmitText,$ModVndValveSourceCompiledMap,
	$ModVndVtu,$ModVrml,$ModX3DVrml,$ModX3DFastinfoset,$ModX3DXml,
	//Multipart Media Types
	$Multipart,$MulAlternative,$MulAppledouble,$MulByteranges,$MulDigest,$MulEncrypted,$MulExample,$MulFormData,$MulHeaderSet,$MulMixed,
	$MulParallel,$MulRelated,$MulReport,$MulSigned,$MulVoiceMessage,$MulXMixedReplace,
	//Text Media Types
	$Text,$Txt1DInterleavedParityfec,$TxtCacheManifest,$TxtCalendar,$TxtCss,$TxtCsv,$TxtCsvSchema,$TxtDirectoryDeprecatedByRfc6350,
	$TxtDns,$TxtEcmascriptObsoletedInFavorOfApplicationEcmascript,$TxtEncaprtp,$TxtEnriched,$TxtExample,$TxtFwdred,$TxtGrammarRefList,
	$TxtHtml,$TxtJavascriptObsoletedInFavorOfApplicationJavascript,$TxtJcrCnd,$TxtMarkdown_Temporary,$TxtMizar,$TxtN3,$TxtParameters,
	$TxtParityfec,$TxtPlain,$TxtProvenanceNotation,$TxtPrsFallensteinRst,$TxtPrsLinesTag,$TxtRaptorfec,$TxtRed,$TxtRfc822Headers,
	$TxtRichtext,$TxtRtf,$TxtRtpEncAescm128,$TxtRtploopback,$TxtRtx,$TxtSgml,$TxtT140,$TxtTabSeparatedValues,$TxtTroff,$TxtTurtle,
	$TxtUlpfec,$TxtUriList,$TxtVcard,$TxtVndA,$TxtVndAbc,$TxtVndCurl,$TxtVndDebianCopyright,$TxtVndDmclientscript,$TxtVndDvbSubtitle,
	$TxtVndEsmertecThemeDescriptor,$TxtVndFly,$TxtVndFmiFlexstor,$TxtVndGraphviz,$TxtVndIn3D3Dml,$TxtVndIn3DSpot,$TxtVndIptcNewsml,
	$TxtVndIptcNitf,$TxtVndLatexZ,$TxtVndMotorolaReflex,$TxtVndMsMediapackage,$TxtVndNet2PhoneCommcenterCommand,
	$TxtVndRadisysMsmlBasicLayout,$TxtVndSiUricatalogueObsoletedByRequest,$TxtVndSunJ2MeAppDescriptor,$TxtVndTrolltechLinguist,$TxtVndWapSi,
	$TxtVndWapSl,$TxtVndWapWml,$TxtVndWapWmlscript,$TxtXml,$TxtXmlExternalParsedEntity,
	//Video Media Types
	$Video,$Vid1DInterleavedParityfec,$Vid3Gpp,$Vid3Gpp2,$Vid3GppTt,$VidBmpeg,$VidBt656,$VidCelb,$VidDv,$VidEncaprtp,$VidExample,$VidH261,
	$VidH263,$VidH2631998,$VidH2632000,$VidH264,$VidH264Rcdo,$VidH264Svc,$VidIsoSegment,$VidJpeg,$VidJpeg2000,$VidMj2,$VidMp1S,
	$VidMp2P,$VidMp2T,$VidMp4,$VidMp4VEs,$VidMpv,$VidMpeg,$VidMpeg4Generic,$VidNv,$VidOgg,$VidParityfec,$VidPointer,$VidQuicktime,
	$VidRaptorfec,$VidRaw,$VidRtpEncAescm128,$VidRtploopback,$VidRtx,$VidSmpte292M,$VidUlpfec,$VidVc1,$VidVndCctv,$VidVndDeceHd,
	$VidVndDeceMobile,$VidVndDeceMp4,$VidVndDecePd,$VidVndDeceSd,$VidVndDeceVideo,$VidVndDirectvMpeg,$VidVndDirectvMpegTts,
	$VidVndDlnaMpegTts,$VidVndDvbFile,$VidVndFvt,$VidVndHnsVideo,$VidVndIptvforum1Dparityfec1010,$VidVndIptvforum1Dparityfec2005,
	$VidVndIptvforum2Dparityfec1010,$VidVndIptvforum2Dparityfec2005,$VidVndIptvforumTtsavc,$VidVndIptvforumTtsmpeg2,$VidVndMotorolaVideo,
	$VidVndMotorolaVideop,$VidVndMpegurl,$VidVndMsPlayreadyMediaPyv,$VidVndNokiaInterleavedMultimedia,$VidVndNokiaVideovoip,$VidVndObjectvideo,
	$VidVndRadgamettoolsBink,$VidVndRadgamettoolsSmacker,$VidVndSealedMpeg1,$VidVndSealedMpeg4,$VidVndSealedSwf,
	$VidVndSealedmediaSoftsealMov,$VidVndUvvuMp4,$VidVndVivo;

	protected function __construct($name, $value){parent::__construct($name, $value);}
	
	public static function Initialize(){
		self::$App1DInterleavedParityfec = new IANAMediaTypes('1d-interleaved-parityfec', 'application/1d-interleaved-parityfec');
		self::$App3GpdashQoeReportXml = new IANAMediaTypes('3gpdash-qoe-report+xml', 'application/3gpdash-qoe-report+xml');
		self::$App3GppImsXml = new IANAMediaTypes('3gpp-ims+xml', 'application/3gpp-ims+xml');
		self::$AppA2L = new IANAMediaTypes('A2L', 'application/A2L');
		self::$AppActivemessage = new IANAMediaTypes('activemessage', 'application/activemessage');
		self::$AppAltoCostmapJson = new IANAMediaTypes('alto-costmap+json', 'application/alto-costmap+json');
		self::$AppAltoCostmapfilterJson = new IANAMediaTypes('alto-costmapfilter+json', 'application/alto-costmapfilter+json');
		self::$AppAltoDirectoryJson = new IANAMediaTypes('alto-directory+json', 'application/alto-directory+json');
		self::$AppAltoEndpointpropJson = new IANAMediaTypes('alto-endpointprop+json', 'application/alto-endpointprop+json');
		self::$AppAltoEndpointpropparamsJson = new IANAMediaTypes('alto-endpointpropparams+json', 'application/alto-endpointpropparams+json');
		self::$AppAltoEndpointcostJson = new IANAMediaTypes('alto-endpointcost+json', 'application/alto-endpointcost+json');
		self::$AppAltoEndpointcostparamsJson = new IANAMediaTypes('alto-endpointcostparams+json', 'application/alto-endpointcostparams+json');
		self::$AppAltoErrorJson = new IANAMediaTypes('alto-error+json', 'application/alto-error+json');
		self::$AppAltoNetworkmapfilterJson = new IANAMediaTypes('alto-networkmapfilter+json', 'application/alto-networkmapfilter+json');
		self::$AppAltoNetworkmapJson = new IANAMediaTypes('alto-networkmap+json', 'application/alto-networkmap+json');
		self::$AppAml = new IANAMediaTypes('AML', 'application/AML');
		self::$AppAndrewInset = new IANAMediaTypes('andrew-inset', 'application/andrew-inset');
		self::$AppApplefile = new IANAMediaTypes('applefile', 'application/applefile');
		self::$AppAtf = new IANAMediaTypes('ATF', 'application/ATF');
		self::$AppAtfx = new IANAMediaTypes('ATFX', 'application/ATFX');
		self::$AppAtomXml = new IANAMediaTypes('atom+xml', 'application/atom+xml');
		self::$AppAtomcatXml = new IANAMediaTypes('atomcat+xml', 'application/atomcat+xml');
		self::$AppAtomdeletedXml = new IANAMediaTypes('atomdeleted+xml', 'application/atomdeleted+xml');
		self::$AppAtomicmail = new IANAMediaTypes('atomicmail', 'application/atomicmail');
		self::$AppAtomsvcXml = new IANAMediaTypes('atomsvc+xml', 'application/atomsvc+xml');
		self::$AppAtxml = new IANAMediaTypes('ATXML', 'application/ATXML');
		self::$AppAuthPolicyXml = new IANAMediaTypes('auth-policy+xml', 'application/auth-policy+xml');
		self::$AppBacnetXddZip = new IANAMediaTypes('bacnet-xdd+zip', 'application/bacnet-xdd+zip');
		self::$AppBatchSmtp = new IANAMediaTypes('batch-SMTP', 'application/batch-SMTP');
		self::$AppBeepXml = new IANAMediaTypes('beep+xml', 'application/beep+xml');
		self::$AppCalendarJson = new IANAMediaTypes('calendar+json', 'application/calendar+json');
		self::$AppCalendarXml = new IANAMediaTypes('calendar+xml', 'application/calendar+xml');
		self::$AppCallCompletion = new IANAMediaTypes('call-completion', 'application/call-completion');
		self::$AppCals1840 = new IANAMediaTypes('CALS-1840', 'application/CALS-1840');
		self::$AppCbor = new IANAMediaTypes('cbor', 'application/cbor');
		self::$AppCcmpXml = new IANAMediaTypes('ccmp+xml', 'application/ccmp+xml');
		self::$AppCcxmlXml = new IANAMediaTypes('ccxml+xml', 'application/ccxml+xml');
		self::$AppCdfxXml = new IANAMediaTypes('CDFX+XML', 'application/CDFX+XML');
		self::$AppCdmiCapability = new IANAMediaTypes('cdmi-capability', 'application/cdmi-capability');
		self::$AppCdmiContainer = new IANAMediaTypes('cdmi-container', 'application/cdmi-container');
		self::$AppCdmiDomain = new IANAMediaTypes('cdmi-domain', 'application/cdmi-domain');
		self::$AppCdmiObject = new IANAMediaTypes('cdmi-object', 'application/cdmi-object');
		self::$AppCdmiQueue = new IANAMediaTypes('cdmi-queue', 'application/cdmi-queue');
		self::$AppCea = new IANAMediaTypes('CEA', 'application/CEA');
		self::$AppCea2018Xml = new IANAMediaTypes('cea-2018+xml', 'application/cea-2018+xml');
		self::$AppCellmlXml = new IANAMediaTypes('cellml+xml', 'application/cellml+xml');
		self::$AppCfw = new IANAMediaTypes('cfw', 'application/cfw');
		self::$AppCms = new IANAMediaTypes('cms', 'application/cms');
		self::$AppCnrpXml = new IANAMediaTypes('cnrp+xml', 'application/cnrp+xml');
		self::$AppCoapGroupJson = new IANAMediaTypes('coap-group+json', 'application/coap-group+json');
		self::$AppCommonground = new IANAMediaTypes('commonground', 'application/commonground');
		self::$AppConferenceInfoXml = new IANAMediaTypes('conference-info+xml', 'application/conference-info+xml');
		self::$AppCplXml = new IANAMediaTypes('cpl+xml', 'application/cpl+xml');
		self::$AppCsrattrs = new IANAMediaTypes('csrattrs', 'application/csrattrs');
		self::$AppCstaXml = new IANAMediaTypes('csta+xml', 'application/csta+xml');
		self::$AppCstadataXml = new IANAMediaTypes('CSTAdata+xml', 'application/CSTAdata+xml');
		self::$AppCybercash = new IANAMediaTypes('cybercash', 'application/cybercash');
		self::$AppDashXml = new IANAMediaTypes('dash+xml', 'application/dash+xml');
		self::$AppDashdelta = new IANAMediaTypes('dashdelta', 'application/dashdelta');
		self::$AppDavmountXml = new IANAMediaTypes('davmount+xml', 'application/davmount+xml');
		self::$AppDcaRft = new IANAMediaTypes('dca-rft', 'application/dca-rft');
		self::$AppDcd = new IANAMediaTypes('DCD', 'application/DCD');
		self::$AppDecDx = new IANAMediaTypes('dec-dx', 'application/dec-dx');
		self::$AppDialogInfoXml = new IANAMediaTypes('dialog-info+xml', 'application/dialog-info+xml');
		self::$AppDicom = new IANAMediaTypes('dicom', 'application/dicom');
		self::$AppDii = new IANAMediaTypes('DII', 'application/DII');
		self::$AppDit = new IANAMediaTypes('DIT', 'application/DIT');
		self::$AppDns = new IANAMediaTypes('dns', 'application/dns');
		self::$AppDskppXml = new IANAMediaTypes('dskpp+xml', 'application/dskpp+xml');
		self::$AppDsscDer = new IANAMediaTypes('dssc+der', 'application/dssc+der');
		self::$AppDsscXml = new IANAMediaTypes('dssc+xml', 'application/dssc+xml');
		self::$AppDvcs = new IANAMediaTypes('dvcs', 'application/dvcs');
		self::$AppEcmascript = new IANAMediaTypes('ecmascript', 'application/ecmascript');
		self::$AppEdiConsent = new IANAMediaTypes('EDI-consent', 'application/EDI-consent');
		self::$AppEdifact = new IANAMediaTypes('EDIFACT', 'application/EDIFACT');
		self::$AppEdiX12 = new IANAMediaTypes('EDI-X12', 'application/EDI-X12');
		self::$AppEmmaXml = new IANAMediaTypes('emma+xml', '');
		self::$AppEmotionmlXml = new IANAMediaTypes('emotionml+xml', 'application/emotionml+xml');
		self::$AppEncaprtp = new IANAMediaTypes('encaprtp', 'application/encaprtp');
		self::$AppEppXml = new IANAMediaTypes('epp+xml', 'application/epp+xml');
		self::$AppEpubZip = new IANAMediaTypes('epub+zip', 'application/epub+zip');
		self::$AppEshop = new IANAMediaTypes('eshop', 'application/eshop');
		self::$AppExample = new IANAMediaTypes('example', 'application/example');
		self::$AppExi = new IANAMediaTypes('exi', '');
		self::$AppFastinfoset = new IANAMediaTypes('fastinfoset', 'application/fastinfoset');
		self::$AppFastsoap = new IANAMediaTypes('fastsoap', 'application/fastsoap');
		self::$AppFdtXml = new IANAMediaTypes('fdt+xml', 'application/fdt+xml');
		self::$AppFits = new IANAMediaTypes('fits', 'application/fits');
		self::$AppFontSfnt = new IANAMediaTypes('font-sfnt', 'application/font-sfnt');
		self::$AppFontTdpfr = new IANAMediaTypes('font-tdpfr', 'application/font-tdpfr');
		self::$AppFontWoff = new IANAMediaTypes('font-woff', 'application/font-woff');
		self::$AppFrameworkAttributesXml = new IANAMediaTypes('framework-attributes+xml', 'application/framework-attributes+xml');
		self::$AppGzip = new IANAMediaTypes('gzip', 'application/gzip');
		self::$AppH224 = new IANAMediaTypes('H224', 'application/H224');
		self::$AppHeldXml = new IANAMediaTypes('held+xml', 'application/held+xml');
		self::$AppHttp = new IANAMediaTypes('http', 'application/http');
		self::$AppHyperstudio = new IANAMediaTypes('hyperstudio', 'application/hyperstudio');
		self::$AppIbeKeyRequestXml = new IANAMediaTypes('ibe-key-request+xml', 'application/ibe-key-request+xml');
		self::$AppIbePkgReplyXml = new IANAMediaTypes('ibe-pkg-reply+xml', 'application/ibe-pkg-reply+xml');
		self::$AppIbePpData = new IANAMediaTypes('ibe-pp-data', 'application/ibe-pp-data');
		self::$AppIges = new IANAMediaTypes('iges', 'application/iges');
		self::$AppImIscomposingXml = new IANAMediaTypes('im-iscomposing+xml', 'application/im-iscomposing+xml');
		self::$AppIndex = new IANAMediaTypes('index', 'application/index');
		self::$AppIndexCmd = new IANAMediaTypes('index.cmd', 'application/index.cmd');
		self::$AppIndexObj = new IANAMediaTypes('index.obj', 'application/index-obj');
		self::$AppIndexResponse = new IANAMediaTypes('index.response', 'application/index.response');
		self::$AppIndexVnd = new IANAMediaTypes('index.vnd', 'application/index.vnd');
		self::$AppInkmlXml = new IANAMediaTypes('inkml+xml', 'application/inkml+xml');
		self::$AppIotp = new IANAMediaTypes('iotp', 'application/IOTP');
		self::$AppIpfix = new IANAMediaTypes('ipfix', 'application/ipfix');
		self::$AppIpp = new IANAMediaTypes('ipp', 'application/ipp');
		self::$AppIsup = new IANAMediaTypes('isup', 'application/ISUP');
		self::$AppItsXml = new IANAMediaTypes('its+xml', 'application/its+xml');
		self::$AppJavascript = new IANAMediaTypes('javascript', 'application/javascript');
		self::$AppJose = new IANAMediaTypes('jose', 'application/jose');
		self::$AppJoseJson = new IANAMediaTypes('jose+json', 'application/jose+json');
		self::$AppJrdJson = new IANAMediaTypes('jrd+json', 'application/jrd+json');
		self::$AppJson = new IANAMediaTypes('json', 'application/json');
		self::$AppJsonPatchJson = new IANAMediaTypes('json-patch+json', 'application/json-patch+json');
		self::$AppJsonSeq = new IANAMediaTypes('json-seq', 'application/json-seq');
		self::$AppJwkJson = new IANAMediaTypes('jwk+json', 'application/jwk+json');
		self::$AppJwkSetJson = new IANAMediaTypes('jwk-set+json', 'application/jwk-set+json');
		self::$AppJwt = new IANAMediaTypes('jwt', 'application/jwt');
		self::$AppKpmlRequestXml = new IANAMediaTypes('kpml-request+xml', 'application/kpml-request+xml');
		self::$AppKpmlResponseXml = new IANAMediaTypes('kpml-response+xml', 'application/kpml-response+xml');
		self::$AppLdJson = new IANAMediaTypes('ld+json', 'application/ld+json');
		self::$AppLinkFormat = new IANAMediaTypes('link-format', 'application/link-format');
		self::$AppLoadControlXml = new IANAMediaTypes('load-control+xml', 'application/load-control+xml');
		self::$AppLostXml = new IANAMediaTypes('lost+xml', 'application/lost+xml');
		self::$AppLostsyncXml = new IANAMediaTypes('lostsync+xml', 'application/lostsync+xml');
		self::$AppLxf = new IANAMediaTypes('LXF', 'application/LXF');
		self::$AppMacBinhex40 = new IANAMediaTypes('mac-binhex40', 'application/mac-binhex40');
		self::$AppMacwriteii = new IANAMediaTypes('macwriteii', 'application/macwriteii');
		self::$AppMadsXml = new IANAMediaTypes('mads+xml', 'application/mads+xml');
		self::$AppMarc = new IANAMediaTypes('marc', 'application/marc');
		self::$AppMarcxmlXml = new IANAMediaTypes('marcxml+xml', 'application/marcxml+xml');
		self::$AppMathematica = new IANAMediaTypes('mathematica', 'application/mathematica');
		self::$AppMathmlContentXml = new IANAMediaTypes('mathml-content+xml', '');
		self::$AppMathmlPresentationXml = new IANAMediaTypes('mathml-presentation+xml', '');
		self::$AppMathmlXml = new IANAMediaTypes('mathml+xml', '');
		self::$AppMbmsAssociatedProcedureDescriptionXml = new IANAMediaTypes('mbms-associated-procedure-description+xml', 'application/mbms-associated-procedure-description+xml');
		self::$AppMbmsDeregisterXml = new IANAMediaTypes('mbms-deregister+xml', 'application/mbms-deregister+xml');
		self::$AppMbmsEnvelopeXml = new IANAMediaTypes('mbms-envelope+xml', 'application/mbms-envelope+xml');
		self::$AppMbmsMskResponseXml = new IANAMediaTypes('mbms-msk-response+xml', 'application/mbms-msk-response+xml');
		self::$AppMbmsMskXml = new IANAMediaTypes('mbms-msk+xml', 'application/mbms-msk+xml');
		self::$AppMbmsProtectionDescriptionXml = new IANAMediaTypes('mbms-protection-description+xml', 'application/mbms-protection-description+xml');
		self::$AppMbmsReceptionReportXml = new IANAMediaTypes('mbms-reception-report+xml', 'application/mbms-reception-report+xml');
		self::$AppMbmsRegisterResponseXml = new IANAMediaTypes('mbms-register-response+xml', 'application/mbms-register-response+xml');
		self::$AppMbmsRegisterXml = new IANAMediaTypes('mbms-register+xml', 'application/mbms-register+xml');
		self::$AppMbmsScheduleXml = new IANAMediaTypes('mbms-schedule+xml', 'application/mbms-schedule+xml');
		self::$AppMbmsUserServiceDescriptionXml = new IANAMediaTypes('mbms-user-service-description+xml', 'application/mbms-user-service-description+xml');
		self::$AppMbox = new IANAMediaTypes('mbox', 'application/mbox');
		self::$AppMediaControlXml = new IANAMediaTypes('media_control+xml', 'application/media_control+xml');
		self::$AppMediaPolicyDatasetXml = new IANAMediaTypes('media-policy-dataset+xml', 'application/media-policy-dataset+xml');
		self::$AppMediaservercontrolXml = new IANAMediaTypes('mediaservercontrol+xml', 'application/mediaservercontrol+xml');
		self::$AppMergePatchJson = new IANAMediaTypes('merge-patch+json', 'application/merge-patch+json');
		self::$AppMetalink4Xml = new IANAMediaTypes('metalink4+xml', 'application/metalink4+xml');
		self::$AppMetsXml = new IANAMediaTypes('mets+xml', 'application/mets+xml');
		self::$AppMf4 = new IANAMediaTypes('MF4', 'application/MF4');
		self::$AppMikey = new IANAMediaTypes('mikey', 'application/mikey');
		self::$AppModsXml = new IANAMediaTypes('mods+xml', 'application/mods+xml');
		self::$AppMossKeys = new IANAMediaTypes('moss-keys', 'application/moss-keys');
		self::$AppMossSignature = new IANAMediaTypes('moss-signature', 'application/moss-signature');
		self::$AppMosskeyData = new IANAMediaTypes('mosskey-data', 'application/mosskey-data');
		self::$AppMosskeyRequest = new IANAMediaTypes('mosskey-request', 'application/mosskey-request');
		self::$AppMp21 = new IANAMediaTypes('mp21', 'application/mp21');
		self::$AppMp4 = new IANAMediaTypes('mp4', 'application/mp4');
		self::$AppMpeg4Generic = new IANAMediaTypes('mpeg4-generic', 'application/mpeg4-generic');
		self::$AppMpeg4Iod = new IANAMediaTypes('mpeg4-iod', 'application/mpeg4-iod');
		self::$AppMpeg4IodXmt = new IANAMediaTypes('mpeg4-iod-xmt', 'application/mpeg4-iod-xmt');
		self::$AppMrbConsumerXml = new IANAMediaTypes('mrb-consumer+xml', 'application/mrb-consumer+xml');
		self::$AppMrbPublishXml = new IANAMediaTypes('mrb-publish+xml', 'application/mrb-publish+xml');
		self::$AppMscIvrXml = new IANAMediaTypes('msc-ivr+xml', 'application/msc-ivr+xml');
		self::$AppMscMixerXml = new IANAMediaTypes('msc-mixer+xml', 'application/msc-mixer+xml');
		self::$AppMsword = new IANAMediaTypes('msword', 'application/msword');
		self::$AppMxf = new IANAMediaTypes('mxf', 'application/mxf');
		self::$AppNasdata = new IANAMediaTypes('nasdata', 'application/nasdata');
		self::$AppNewsCheckgroups = new IANAMediaTypes('news-checkgroups', 'application/news-checkgroups');
		self::$AppNewsGroupinfo = new IANAMediaTypes('news-groupinfo', 'application/news-groupinfo');
		self::$AppNewsTransmission = new IANAMediaTypes('news-transmission', 'application/news-transmission');
		self::$AppNlsmlXml = new IANAMediaTypes('nlsml+xml', 'application/nlsml+xml');
		self::$AppNss = new IANAMediaTypes('nss', 'application/nss');
		self::$AppOcspRequest = new IANAMediaTypes('ocsp-request', 'application/ocsp-request');
		self::$AppOcspResponse = new IANAMediaTypes('ocsp-response', 'application/ocsp-response');
		self::$AppOctetStream = new IANAMediaTypes('octet-stream', 'application/octet-stream');
		self::$AppOda = new IANAMediaTypes('oda', 'application/ODA');
		self::$AppOdx = new IANAMediaTypes('ODX', 'application/ODX');
		self::$AppOebpsPackageXml = new IANAMediaTypes('oebps-package+xml', 'application/oebps-package+xml');
		self::$AppOgg = new IANAMediaTypes('ogg', 'application/ogg');
		self::$AppOxps = new IANAMediaTypes('oxps', 'application/oxps');
		self::$AppP2POverlayXml = new IANAMediaTypes('p2p-overlay+xml', 'application/p2p-overlay+xml');
		self::$AppParityfec = new IANAMediaTypes('parityfec', '');
		self::$AppPatchOpsErrorXml = new IANAMediaTypes('patch-ops-error+xml', 'application/patch-ops-error+xml');
		self::$AppPdf = new IANAMediaTypes('pdf', 'application/pdf');
		self::$AppPdx = new IANAMediaTypes('PDX', 'application/PDX');
		self::$AppPgpEncrypted = new IANAMediaTypes('pgp-encrypted', 'application/pgp-encrypted');
		self::$AppPgpKeys = new IANAMediaTypes('pgp-keys', '');
		self::$AppPgpSignature = new IANAMediaTypes('pgp-signature', 'application/pgp-signature');
		self::$AppPidfDiffXml = new IANAMediaTypes('pidf-diff+xml', 'application/pidf-diff+xml');
		self::$AppPidfXml = new IANAMediaTypes('pidf+xml', 'application/pidf+xml');
		self::$AppPkcs10 = new IANAMediaTypes('pkcs10', 'application/pkcs10');
		self::$AppPkcs7Mime = new IANAMediaTypes('pkcs7-mime', 'application/pkcs7-mime');
		self::$AppPkcs7Signature = new IANAMediaTypes('pkcs7-signature', 'application/pkcs7-signature');
		self::$AppPkcs8 = new IANAMediaTypes('pkcs8', 'application/pkcs8');
		self::$AppPkixAttrCert = new IANAMediaTypes('pkix-attr-cert', 'application/pkix-attr-cert');
		self::$AppPkixCert = new IANAMediaTypes('pkix-cert', 'application/pkix-cert');
		self::$AppPkixCrl = new IANAMediaTypes('pkix-crl', 'application/pkix-crl');
		self::$AppPkixPkipath = new IANAMediaTypes('pkix-pkipath', 'application/pkix-pkipath');
		self::$AppPkixcmp = new IANAMediaTypes('pkixcmp', 'application/pkixcmp');
		self::$AppPlsXml = new IANAMediaTypes('pls+xml', 'application/pls+xml');
		self::$AppPocSettingsXml = new IANAMediaTypes('poc-settings+xml', 'application/poc-settings+xml');
		self::$AppPostscript = new IANAMediaTypes('postscript', 'application/postscript');
		self::$AppProvenanceXml = new IANAMediaTypes('provenance+xml', 'application/provenance+xml');
		self::$AppPrsAlvestrandTitraxSheet = new IANAMediaTypes('prs.alvestrand.titrax-sheet', 'application/prs.alvestrand.titrax-sheet');
		self::$AppPrsCww = new IANAMediaTypes('prs.cww', 'application/prs.cww');
		self::$AppPrsHpubZip = new IANAMediaTypes('prs.hpub+zip', 'application/prs.hpub+zip');
		self::$AppPrsNprend = new IANAMediaTypes('prs.nprend', 'application/prs.nprend');
		self::$AppPrsPlucker = new IANAMediaTypes('prs.plucker', 'application/prs.plucker');
		self::$AppPrsRdfXmlCrypt = new IANAMediaTypes('prs.rdf-xml-crypt', 'application/prs.rdf-xml-crypt');
		self::$AppPrsXsfXml = new IANAMediaTypes('prs.xsf+xml', 'application/prs.xsf+xml');
		self::$AppPskcXml = new IANAMediaTypes('pskc+xml', 'application/pskc+xml');
		self::$AppRdfXml = new IANAMediaTypes('rdf+xml', 'application/rdf+xml');
		self::$AppQsig = new IANAMediaTypes('qsig', 'application/QSIG');
		self::$AppRaptorfec = new IANAMediaTypes('raptorfec', 'application/raptorfec');
		self::$AppRdapJson = new IANAMediaTypes('rdap+json', 'application/rdap+json');
		self::$AppReginfoXml = new IANAMediaTypes('reginfo+xml', 'application/reginfo+xml');
		self::$AppRelaxNgCompactSyntax = new IANAMediaTypes('relax-ng-compact-syntax', 'application/relax-ng-compact-syntax');
		self::$AppRemotePrinting = new IANAMediaTypes('remote-printing', 'application/remote-printing');
		self::$AppReputonJson = new IANAMediaTypes('reputon+json', 'application/reputon+json');
		self::$AppResourceListsDiffXml = new IANAMediaTypes('resource-lists-diff+xml', 'application/resource-lists-diff+xml');
		self::$AppResourceListsXml = new IANAMediaTypes('resource-lists+xml', 'application/resource-lists+xml');
		self::$AppRiscos = new IANAMediaTypes('riscos', 'application/riscos');
		self::$AppRlmiXml = new IANAMediaTypes('rlmi+xml', 'application/rlmi+xml');
		self::$AppRlsServicesXml = new IANAMediaTypes('rls-services+xml', 'application/rls-services+xml');
		self::$AppRpkiGhostbusters = new IANAMediaTypes('rpki-ghostbusters', 'application/rpki-ghostbusters');
		self::$AppRpkiManifest = new IANAMediaTypes('rpki-manifest', 'application/rpki-manifest');
		self::$AppRpkiRoa = new IANAMediaTypes('rpki-roa', 'application/rpki-roa');
		self::$AppRpkiUpdown = new IANAMediaTypes('rpki-updown', 'application/rpki-updown');
		self::$AppRtf = new IANAMediaTypes('rtf', 'application/rtf');
		self::$AppRtploopback = new IANAMediaTypes('rtploopback', 'application/rtploopback');
		self::$AppRtx = new IANAMediaTypes('rtx', 'application/rtx');
		self::$AppSamlassertionXml = new IANAMediaTypes('samlassertion+xml', 'application/samlassertion+xml');
		self::$AppSamlmetadataXml = new IANAMediaTypes('samlmetadata+xml', 'application/samlmetadata+xml');
		self::$AppSbmlXml = new IANAMediaTypes('sbml+xml', 'application/sbml+xml');
		self::$AppScaipXml = new IANAMediaTypes('scaip+xml', 'application/scaip+xml');
		self::$AppScimJson = new IANAMediaTypes('scim+json', 'application/scim+json');
		self::$AppScvpCvRequest = new IANAMediaTypes('scvp-cv-request', 'application/scvp-cv-request');
		self::$AppScvpCvResponse = new IANAMediaTypes('scvp-cv-response', 'application/scvp-cv-response');
		self::$AppScvpVpRequest = new IANAMediaTypes('scvp-vp-request', 'application/scvp-vp-request');
		self::$AppScvpVpResponse = new IANAMediaTypes('scvp-vp-response', 'application/scvp-vp-response');
		self::$AppSdp = new IANAMediaTypes('sdp', 'application/sdp');
		self::$AppSepExi = new IANAMediaTypes('sep-exi', 'application/sep-exi');
		self::$AppSepXml = new IANAMediaTypes('sep+xml', 'application/sep+xml');
		self::$AppSessionInfo = new IANAMediaTypes('session-info', 'application/session-info');
		self::$AppSetPayment = new IANAMediaTypes('set-payment', 'application/set-payment');
		self::$AppSetPaymentInitiation = new IANAMediaTypes('set-payment-initiation', 'application/set-payment-initiation');
		self::$AppSetRegistration = new IANAMediaTypes('set-registration', 'application/set-registration');
		self::$AppSetRegistrationInitiation = new IANAMediaTypes('set-registration-initiation', 'application/set-registration-initiation');
		self::$AppSgml = new IANAMediaTypes('sgml', 'application/SGML');
		self::$AppSgmlOpenCatalog = new IANAMediaTypes('sgml-open-catalog', 'application/sgml-open-catalog');
		self::$AppShfXml = new IANAMediaTypes('shf+xml', 'application/shf+xml');
		self::$AppSieve = new IANAMediaTypes('sieve', 'application/sieve');
		self::$AppSimpleFilterXml = new IANAMediaTypes('simple-filter+xml', 'application/simple-filter+xml');
		self::$AppSimpleMessageSummary = new IANAMediaTypes('simple-message-summary', 'application/simple-message-summary');
		self::$AppSimplesymbolcontainer = new IANAMediaTypes('simpleSymbolContainer', 'application/simpleSymbolContainer');
		self::$AppSlate = new IANAMediaTypes('slate', 'application/slate');
		self::$AppSmilObsoletedInFavorOfApplicationSmilXml = new IANAMediaTypes('smil - OBSOLETED in favor of application/smil+xml', 'application/smil');
		self::$AppSmilXml = new IANAMediaTypes('smil+xml', 'application/smil+xml');
		self::$AppSmpte336M = new IANAMediaTypes('smpte336m', 'application/smpte336m');
		self::$AppSoapFastinfoset = new IANAMediaTypes('soap+fastinfoset', 'application/soap+fastinfoset');
		self::$AppSoapXml = new IANAMediaTypes('soap+xml', 'application/soap+xml');
		self::$AppSparqlQuery = new IANAMediaTypes('sparql-query', '');
		self::$AppSparqlResultsXml = new IANAMediaTypes('sparql-results+xml', '');
		self::$AppSpiritsEventXml = new IANAMediaTypes('spirits-event+xml', 'application/spirits-event+xml');
		self::$AppSql = new IANAMediaTypes('sql', 'application/sql');
		self::$AppSrgs = new IANAMediaTypes('srgs', 'application/srgs');
		self::$AppSrgsXml = new IANAMediaTypes('srgs+xml', 'application/srgs+xml');
		self::$AppSruXml = new IANAMediaTypes('sru+xml', 'application/sru+xml');
		self::$AppSsmlXml = new IANAMediaTypes('ssml+xml', 'application/ssml+xml');
		self::$AppTampApexUpdate = new IANAMediaTypes('tamp-apex-update', 'application/tamp-apex-update');
		self::$AppTampApexUpdateConfirm = new IANAMediaTypes('tamp-apex-update-confirm', 'application/tamp-apex-update-confirm');
		self::$AppTampCommunityUpdate = new IANAMediaTypes('tamp-community-update', 'application/tamp-community-update');
		self::$AppTampCommunityUpdateConfirm = new IANAMediaTypes('tamp-community-update-confirm', 'application/tamp-community-update-confirm');
		self::$AppTampError = new IANAMediaTypes('tamp-error', 'application/tamp-error');
		self::$AppTampSequenceAdjust = new IANAMediaTypes('tamp-sequence-adjust', 'application/tamp-sequence-adjust');
		self::$AppTampSequenceAdjustConfirm = new IANAMediaTypes('tamp-sequence-adjust-confirm', 'application/tamp-sequence-adjust-confirm');
		self::$AppTampStatusQuery = new IANAMediaTypes('tamp-status-query', 'application/tamp-status-query');
		self::$AppTampStatusResponse = new IANAMediaTypes('tamp-status-response', 'application/tamp-status-response');
		self::$AppTampUpdate = new IANAMediaTypes('tamp-update', 'application/tamp-update');
		self::$AppTampUpdateConfirm = new IANAMediaTypes('tamp-update-confirm', 'application/tamp-update-confirm');
		self::$AppTeiXml = new IANAMediaTypes('tei+xml', 'application/tei+xml');
		self::$AppThraudXml = new IANAMediaTypes('thraud+xml', 'application/thraud+xml');
		self::$AppTimestampQuery = new IANAMediaTypes('timestamp-query', 'application/timestamp-query');
		self::$AppTimestampReply = new IANAMediaTypes('timestamp-reply', 'application/timestamp-reply');
		self::$AppTimestampedData = new IANAMediaTypes('timestamped-data', 'application/timestamped-data');
		self::$AppTtmlXml = new IANAMediaTypes('ttml+xml', 'application/ttml+xml');
		self::$AppTveTrigger = new IANAMediaTypes('tve-trigger', 'application/tve-trigger');
		self::$AppUlpfec = new IANAMediaTypes('ulpfec', 'application/ulpfec');
		self::$AppUrcGrpsheetXml = new IANAMediaTypes('urc-grpsheet+xml', 'application/urc-grpsheet+xml');
		self::$AppUrcRessheetXml = new IANAMediaTypes('urc-ressheet+xml', 'application/urc-ressheet+xml');
		self::$AppUrcTargetdescXml = new IANAMediaTypes('urc-targetdesc+xml', 'application/urc-targetdesc+xml');
		self::$AppUrcUisocketdescXml = new IANAMediaTypes('urc-uisocketdesc+xml', 'application/urc-uisocketdesc+xml');
		self::$AppVcardJson = new IANAMediaTypes('vcard+json', 'application/vcard+json');
		self::$AppVcardXml = new IANAMediaTypes('vcard+xml', 'application/vcard+xml');
		self::$AppVemmi = new IANAMediaTypes('vemmi', 'application/vemmi');
		self::$AppVnd3GppBsfXml = new IANAMediaTypes('vnd.3gpp.bsf+xml', 'application/vnd.3gpp.bsf+xml');
		self::$AppVnd3GppPicBwLarge = new IANAMediaTypes('vnd.3gpp.pic-bw-large', 'application/vnd.3gpp.pic-bw-large');
		self::$AppVnd3GppPicBwSmall = new IANAMediaTypes('vnd.3gpp.pic-bw-small', 'application/vnd.3gpp.pic-bw-small');
		self::$AppVnd3GppPicBwVar = new IANAMediaTypes('vnd.3gpp.pic-bw-var', 'application/vnd.3gpp.pic-bw-var');
		self::$AppVnd3GppSms = new IANAMediaTypes('vnd.3gpp.sms', 'application/vnd.3gpp.sms');
		self::$AppVnd3GppUssdXml = new IANAMediaTypes('vnd.3gpp.ussd+xml', 'application/vnd.3gpp.ussd+xml');
		self::$AppVnd3Gpp2BcmcsinfoXml = new IANAMediaTypes('vnd.3gpp2.bcmcsinfo+xml', 'application/vnd.3gpp2.bcmcsinfo+xml');
		self::$AppVnd3Gpp2Sms = new IANAMediaTypes('vnd.3gpp2.sms', 'application/vnd.3gpp2.sms');
		self::$AppVnd3Gpp2Tcap = new IANAMediaTypes('vnd.3gpp2.tcap', 'application/vnd.3gpp2.tcap');
		self::$AppVnd3MPostItNotes = new IANAMediaTypes('vnd.3M.Post-it-Notes', 'application/vnd.3M.Post-it-Notes');
		self::$AppVndAccpacSimplyAso = new IANAMediaTypes('vnd.accpac.simply.aso', 'application/vnd.accpac.simply.aso');
		self::$AppVndAccpacSimplyImp = new IANAMediaTypes('vnd.accpac.simply.imp', 'application/vnd.accpac.simply.imp');
		self::$AppVndAcucobol = new IANAMediaTypes('vnd.acucobol', 'application/vnd-acucobol');
		self::$AppVndAcucorp = new IANAMediaTypes('vnd.acucorp', 'application/vnd.acucorp');
		self::$AppVndAdobeFlashMovie = new IANAMediaTypes('vnd.adobe.flash.movie', 'application/vnd.adobe.flash-movie');
		self::$AppVndAdobeFormscentralFcdt = new IANAMediaTypes('vnd.adobe.formscentral.fcdt', 'application/vnd.adobe.formscentral.fcdt');
		self::$AppVndAdobeFxp = new IANAMediaTypes('vnd.adobe.fxp', 'application/vnd.adobe.fxp');
		self::$AppVndAdobePartialUpload = new IANAMediaTypes('vnd.adobe.partial-upload', 'application/vnd.adobe.partial-upload');
		self::$AppVndAdobeXdpXml = new IANAMediaTypes('vnd.adobe.xdp+xml', 'application/vnd.adobe.xdp+xml');
		self::$AppVndAdobeXfdf = new IANAMediaTypes('vnd.adobe.xfdf', 'application/vnd.adobe.xfdf');
		self::$AppVndAetherImp = new IANAMediaTypes('vnd.aether.imp', 'application/vnd.aether.imp');
		self::$AppVndAhBarcode = new IANAMediaTypes('vnd.ah-barcode', 'application/vnd.ah-barcode');
		self::$AppVndAheadSpace = new IANAMediaTypes('vnd.ahead.space', 'application/vnd.ahead.space');
		self::$AppVndAirzipFilesecureAzf = new IANAMediaTypes('vnd.airzip.filesecure.azf', 'application/vnd.airzip.filesecure.azf');
		self::$AppVndAirzipFilesecureAzs = new IANAMediaTypes('vnd.airzip.filesecure.azs', 'application/vnd.airzip.filesecure.azs');
		self::$AppVndAmericandynamicsAcc = new IANAMediaTypes('vnd.americandynamics.acc', 'application/vnd.americandynamics.acc');
		self::$AppVndAmigaAmi = new IANAMediaTypes('vnd.amiga.ami', 'application/vnd.amiga.ami');
		self::$AppVndAmundsenMazeXml = new IANAMediaTypes('vnd.amundsen.maze+xml', 'application/vnd.amundsen.maze+xml');
		self::$AppVndAnserWebCertificateIssueInitiation = new IANAMediaTypes('vnd.anser-web-certificate-issue-initiation', 'application/vnd.anser-web-certificate-issue-initiation');
		self::$AppVndAntixGameComponent = new IANAMediaTypes('vnd.antix.game-component', 'application/vnd.antix.game-component');
		self::$AppVndApacheThriftBinary = new IANAMediaTypes('vnd.apache.thrift.binary', 'application/vnd.apache.thrift.binary');
		self::$AppVndApacheThriftCompact = new IANAMediaTypes('vnd.apache.thrift.compact', 'application/vnd.apache.thrift.compact');
		self::$AppVndApacheThriftJson = new IANAMediaTypes('vnd.apache.thrift.json', 'application/vnd.apache.thrift.json');
		self::$AppVndApiJson = new IANAMediaTypes('vnd.api+json', 'application/vnd.api+json');
		self::$AppVndAppleMpegurl = new IANAMediaTypes('vnd.apple.mpegurl', 'application/vnd.apple.mpegurl');
		self::$AppVndAppleInstallerXml = new IANAMediaTypes('vnd.apple.installer+xml', 'application/vnd.apple.installer+xml');
		self::$AppVndArastraSwiObsoletedInFavorOfApplicationVndAristanetworksSwi = new IANAMediaTypes('vnd.arastra.swi - OBSOLETED in favor of application/vnd.aristanetworks.swi', 'application/vnd.arastra.swi');
		self::$AppVndAristanetworksSwi = new IANAMediaTypes('vnd.aristanetworks.swi', 'application/vnd.aristanetworks.swi');
		self::$AppVndArtsquare = new IANAMediaTypes('vnd.artsquare', 'application/vnd.artsquare');
		self::$AppVndAstraeaSoftwareIota = new IANAMediaTypes('vnd.astraea-software.iota', 'application/vnd.astraea-software.iota');
		self::$AppVndAudiograph = new IANAMediaTypes('vnd.audiograph', 'application/vnd.audiograph');
		self::$AppVndAutopackage = new IANAMediaTypes('vnd.autopackage', 'application/vnd.autopackage');
		self::$AppVndAvistarXml = new IANAMediaTypes('vnd.avistar+xml', 'application/vnd.avistar+xml');
		self::$AppVndBalsamiqBmmlXml = new IANAMediaTypes('vnd.balsamiq.bmml+xml', 'application/vnd.balsamiq.bmml+xml');
		self::$AppVndBalsamiqBmpr = new IANAMediaTypes('vnd.balsamiq.bmpr', 'application/vnd.balsamiq.bmpr');
		self::$AppVndBekitzurStechJson = new IANAMediaTypes('vnd.bekitzur-stech+json', 'application/vnd.bekitzur-stech+json');
		self::$AppVndBiopaxRdfXml = new IANAMediaTypes('vnd.biopax.rdf+xml', 'application/vnd.biopax.rdf+xml');
		self::$AppVndBlueiceMultipass = new IANAMediaTypes('vnd.blueice.multipass', 'application/vnd.blueice.multipass');
		self::$AppVndBluetoothEpOob = new IANAMediaTypes('vnd.bluetooth.ep.oob', 'application/vnd.bluetooth.ep.oob');
		self::$AppVndBluetoothLeOob = new IANAMediaTypes('vnd.bluetooth.le.oob', 'application/vnd.bluetooth.le.oob');
		self::$AppVndBmi = new IANAMediaTypes('vnd.bmi', 'application/vnd.bmi');
		self::$AppVndBusinessobjects = new IANAMediaTypes('vnd.businessobjects', 'application/vnd.businessobjects');
		self::$AppVndCabJscript = new IANAMediaTypes('vnd.cab-jscript', 'application/vnd.cab-jscript');
		self::$AppVndCanonCpdl = new IANAMediaTypes('vnd.canon-cpdl', 'application/vnd.canon-cpdl');
		self::$AppVndCanonLips = new IANAMediaTypes('vnd.canon-lips', 'application/vnd.canon-lips');
		self::$AppVndCendioThinlincClientconf = new IANAMediaTypes('vnd.cendio.thinlinc.clientconf', 'application/vnd.cendio.thinlinc.clientconf');
		self::$AppVndCenturySystemsTcpStream = new IANAMediaTypes('vnd.century-systems.tcp_stream', 'application/vnd.century-systems.tcp_stream');
		self::$AppVndChemdrawXml = new IANAMediaTypes('vnd.chemdraw+xml', 'application/vnd.chemdraw+xml');
		self::$AppVndChipnutsKaraokeMmd = new IANAMediaTypes('vnd.chipnuts.karaoke-mmd', 'application/vnd.chipnuts.karaoke-mmd');
		self::$AppVndCinderella = new IANAMediaTypes('vnd.cinderella', 'application/vnd.cinderella');
		self::$AppVndCirpackIsdnExt = new IANAMediaTypes('vnd.cirpack.isdn-ext', 'application/vnd.cirpack.isdn-ext');
		self::$AppVndCitationstylesStyleXml = new IANAMediaTypes('vnd.citationstyles.style+xml', 'application/vnd.citationstyles.style+xml');
		self::$AppVndClaymore = new IANAMediaTypes('vnd.claymore', 'application/vnd.claymore');
		self::$AppVndCloantoRp9 = new IANAMediaTypes('vnd.cloanto.rp9', 'application/vnd.cloanto.rp9');
		self::$AppVndClonkC4Group = new IANAMediaTypes('vnd.clonk.c4group', 'application/vnd.clonk.c4group');
		self::$AppVndCluetrustCartomobileConfig = new IANAMediaTypes('vnd.cluetrust.cartomobile-config', 'application/vnd.cluetrust.cartomobile-config');
		self::$AppVndCluetrustCartomobileConfigPkg = new IANAMediaTypes('vnd.cluetrust.cartomobile-config-pkg', 'application/vnd.cluetrust.cartomobile-config-pkg');
		self::$AppVndCoffeescript = new IANAMediaTypes('vnd.coffeescript', 'application/vnd.coffeescript');
		self::$AppVndCollectionDocJson = new IANAMediaTypes('vnd.collection.doc+json', 'application/vnd.collection.doc+json');
		self::$AppVndCollectionJson = new IANAMediaTypes('vnd.collection+json', 'application/vnd.collection+json');
		self::$AppVndCollectionNextJson = new IANAMediaTypes('vnd.collection.next+json', 'application/vnd.collection.next+json');
		self::$AppVndCommerceBattelle = new IANAMediaTypes('vnd.commerce-battelle', 'application/vnd.commerce-battelle');
		self::$AppVndCommonspace = new IANAMediaTypes('vnd.commonspace', 'application/vnd.commonspace');
		self::$AppVndCosmocaller = new IANAMediaTypes('vnd.cosmocaller', 'application/vnd.cosmocaller');
		self::$AppVndContactCmsg = new IANAMediaTypes('vnd.contact.cmsg', 'application/vnd.contact.cmsg');
		self::$AppVndCrickClicker = new IANAMediaTypes('vnd.crick.clicker', 'application/vnd.crick.clicker');
		self::$AppVndCrickClickerKeyboard = new IANAMediaTypes('vnd.crick.clicker.keyboard', 'application/vnd.crick.clicker.keyboard');
		self::$AppVndCrickClickerPalette = new IANAMediaTypes('vnd.crick.clicker.palette', 'application/vnd.crick.clicker.palette');
		self::$AppVndCrickClickerTemplate = new IANAMediaTypes('vnd.crick.clicker.template', 'application/vnd.crick.clicker.template');
		self::$AppVndCrickClickerWordbank = new IANAMediaTypes('vnd.crick.clicker.wordbank', 'application/vnd.crick.clicker.wordbank');
		self::$AppVndCriticaltoolsWbsXml = new IANAMediaTypes('vnd.criticaltools.wbs+xml', 'application/vnd.criticaltools.wbs+xml');
		self::$AppVndCtcPosml = new IANAMediaTypes('vnd.ctc-posml', 'application/vnd.ctc-posml');
		self::$AppVndCtctWsXml = new IANAMediaTypes('vnd.ctct.ws+xml', 'application/vnd.ctct.ws+xml');
		self::$AppVndCupsPdf = new IANAMediaTypes('vnd.cups-pdf', 'application/vnd.cups-pdf');
		self::$AppVndCupsPostscript = new IANAMediaTypes('vnd.cups-postscript', 'application/vnd.cups-postscript');
		self::$AppVndCupsPpd = new IANAMediaTypes('vnd.cups-ppd', 'application/vnd.cups-ppd');
		self::$AppVndCupsRaster = new IANAMediaTypes('vnd.cups-raster', 'application/vnd.cups-raster');
		self::$AppVndCupsRaw = new IANAMediaTypes('vnd.cups-raw', 'application/vnd.cups-raw');
		self::$AppVndCurl = new IANAMediaTypes('vnd.curl', 'application/vnd-curl');
		self::$AppVndCyanDeanRootXml = new IANAMediaTypes('vnd.cyan.dean.root+xml', 'application/vnd.cyan.dean.root+xml');
		self::$AppVndCybank = new IANAMediaTypes('vnd.cybank', 'application/vnd.cybank');
		self::$AppVndDart = new IANAMediaTypes('vnd.dart', 'application/vnd-dart');
		self::$AppVndDataVisionRdz = new IANAMediaTypes('vnd.data-vision.rdz', 'application/vnd.data-vision.rdz');
		self::$AppVndDebianBinaryPackage = new IANAMediaTypes('vnd.debian.binary-package', 'application/vnd.debian.binary-package');
		self::$AppVndDeceData = new IANAMediaTypes('vnd.dece.data', 'application/vnd.dece.data');
		self::$AppVndDeceTtmlXml = new IANAMediaTypes('vnd.dece.ttml+xml', 'application/vnd.dece.ttml+xml');
		self::$AppVndDeceUnspecified = new IANAMediaTypes('vnd.dece.unspecified', 'application/vnd.dece.unspecified');
		self::$AppVndDeceZip = new IANAMediaTypes('vnd.dece.zip', 'application/vnd.dece-zip');
		self::$AppVndDenovoFcselayoutLink = new IANAMediaTypes('vnd.denovo.fcselayout-link', 'application/vnd.denovo.fcselayout-link');
		self::$AppVndDesmumeMovie = new IANAMediaTypes('vnd.desmume.movie', 'application/vnd.desmume-movie');
		self::$AppVndDirBiPlateDlNosuffix = new IANAMediaTypes('vnd.dir-bi.plate-dl-nosuffix', 'application/vnd.dir-bi.plate-dl-nosuffix');
		self::$AppVndDmDelegationXml = new IANAMediaTypes('vnd.dm.delegation+xml', 'application/vnd.dm.delegation+xml');
		self::$AppVndDna = new IANAMediaTypes('vnd.dna', 'application/vnd.dna');
		self::$AppVndDocumentJson = new IANAMediaTypes('vnd.document+json', 'application/vnd.document+json');
		self::$AppVndDolbyMobile1 = new IANAMediaTypes('vnd.dolby.mobile.1', 'application/vnd.dolby.mobile.1');
		self::$AppVndDolbyMobile2 = new IANAMediaTypes('vnd.dolby.mobile.2', 'application/vnd.dolby.mobile.2');
		self::$AppVndDoremirScorecloudBinaryDocument = new IANAMediaTypes('vnd.doremir.scorecloud-binary-document', 'application/vnd.doremir.scorecloud-binary-document');
		self::$AppVndDpgraph = new IANAMediaTypes('vnd.dpgraph', 'application/vnd.dpgraph');
		self::$AppVndDreamfactory = new IANAMediaTypes('vnd.dreamfactory', 'application/vnd.dreamfactory');
		self::$AppVndDtgLocal = new IANAMediaTypes('vnd.dtg.local', 'application/vnd.dtg.local');
		self::$AppVndDtgLocalFlash = new IANAMediaTypes('vnd.dtg.local.flash', 'application/vnd.dtg.local.flash');
		self::$AppVndDtgLocalHtml = new IANAMediaTypes('vnd.dtg.local.html', 'application/vnd.dtg.local-html');
		self::$AppVndDvbAit = new IANAMediaTypes('vnd.dvb.ait', 'application/vnd.dvb.ait');
		self::$AppVndDvbDvbj = new IANAMediaTypes('vnd.dvb.dvbj', 'application/vnd.dvb.dvbj');
		self::$AppVndDvbEsgcontainer = new IANAMediaTypes('vnd.dvb.esgcontainer', 'application/vnd.dvb.esgcontainer');
		self::$AppVndDvbIpdcdftnotifaccess = new IANAMediaTypes('vnd.dvb.ipdcdftnotifaccess', 'application/vnd.dvb.ipdcdftnotifaccess');
		self::$AppVndDvbIpdcesgaccess = new IANAMediaTypes('vnd.dvb.ipdcesgaccess', 'application/vnd.dvb.ipdcesgaccess');
		self::$AppVndDvbIpdcesgaccess2 = new IANAMediaTypes('vnd.dvb.ipdcesgaccess2', 'application/vnd.dvb.ipdcesgaccess2');
		self::$AppVndDvbIpdcesgpdd = new IANAMediaTypes('vnd.dvb.ipdcesgpdd', 'application/vnd.dvb.ipdcesgpdd');
		self::$AppVndDvbIpdcroaming = new IANAMediaTypes('vnd.dvb.ipdcroaming', 'application/vnd.dvb.ipdcroaming');
		self::$AppVndDvbIptvAlfecBase = new IANAMediaTypes('vnd.dvb.iptv.alfec-base', 'application/vnd.dvb.iptv.alfec-base');
		self::$AppVndDvbIptvAlfecEnhancement = new IANAMediaTypes('vnd.dvb.iptv.alfec-enhancement', 'application/vnd.dvb.iptv.alfec-enhancement');
		self::$AppVndDvbNotifAggregateRootXml = new IANAMediaTypes('vnd.dvb.notif-aggregate-root+xml', 'application/vnd.dvb.notif-aggregate-root+xml');
		self::$AppVndDvbNotifContainerXml = new IANAMediaTypes('vnd.dvb.notif-container+xml', 'application/vnd.dvb.notif-container+xml');
		self::$AppVndDvbNotifGenericXml = new IANAMediaTypes('vnd.dvb.notif-generic+xml', 'application/vnd.dvb.notif-generic+xml');
		self::$AppVndDvbNotifIaMsglistXml = new IANAMediaTypes('vnd.dvb.notif-ia-msglist+xml', 'application/vnd.dvb.notif-ia-msglist+xml');
		self::$AppVndDvbNotifIaRegistrationRequestXml = new IANAMediaTypes('vnd.dvb.notif-ia-registration-request+xml', 'application/vnd.dvb.notif-ia-registration-request+xml');
		self::$AppVndDvbNotifIaRegistrationResponseXml = new IANAMediaTypes('vnd.dvb.notif-ia-registration-response+xml', 'application/vnd.dvb.notif-ia-registration-response+xml');
		self::$AppVndDvbNotifInitXml = new IANAMediaTypes('vnd.dvb.notif-init+xml', 'application/vnd.dvb.notif-init+xml');
		self::$AppVndDvbPfr = new IANAMediaTypes('vnd.dvb.pfr', 'application/vnd.dvb.pfr');
		self::$AppVndDvbService = new IANAMediaTypes('vnd.dvb.service', 'application/vnd.dvb_service');
		self::$AppVndDxr = new IANAMediaTypes('vnd.dxr', 'application/vnd-dxr');
		self::$AppVndDynageo = new IANAMediaTypes('vnd.dynageo', 'application/vnd.dynageo');
		self::$AppVndDzr = new IANAMediaTypes('vnd.dzr', 'application/vnd.dzr');
		self::$AppVndEasykaraokeCdgdownload = new IANAMediaTypes('vnd.easykaraoke.cdgdownload', 'application/vnd.easykaraoke.cdgdownload');
		self::$AppVndEcdisUpdate = new IANAMediaTypes('vnd.ecdis-update', 'application/vnd.ecdis-update');
		self::$AppVndEcowinChart = new IANAMediaTypes('vnd.ecowin.chart', 'application/vnd.ecowin.chart');
		self::$AppVndEcowinFilerequest = new IANAMediaTypes('vnd.ecowin.filerequest', 'application/vnd.ecowin.filerequest');
		self::$AppVndEcowinFileupdate = new IANAMediaTypes('vnd.ecowin.fileupdate', 'application/vnd.ecowin.fileupdate');
		self::$AppVndEcowinSeries = new IANAMediaTypes('vnd.ecowin.series', 'application/vnd.ecowin.series');
		self::$AppVndEcowinSeriesrequest = new IANAMediaTypes('vnd.ecowin.seriesrequest', 'application/vnd.ecowin.seriesrequest');
		self::$AppVndEcowinSeriesupdate = new IANAMediaTypes('vnd.ecowin.seriesupdate', 'application/vnd.ecowin.seriesupdate');
		self::$AppVndEmclientAccessrequestXml = new IANAMediaTypes('vnd.emclient.accessrequest+xml', 'application/vnd.emclient.accessrequest+xml');
		self::$AppVndEnliven = new IANAMediaTypes('vnd.enliven', 'application/vnd.enliven');
		self::$AppVndEnphaseEnvoy = new IANAMediaTypes('vnd.enphase.envoy', 'application/vnd.enphase.envoy');
		self::$AppVndEprintsDataXml = new IANAMediaTypes('vnd.eprints.data+xml', 'application/vnd.eprints.data+xml');
		self::$AppVndEpsonEsf = new IANAMediaTypes('vnd.epson.esf', 'application/vnd.epson.esf');
		self::$AppVndEpsonMsf = new IANAMediaTypes('vnd.epson.msf', 'application/vnd.epson.msf');
		self::$AppVndEpsonQuickanime = new IANAMediaTypes('vnd.epson.quickanime', 'application/vnd.epson.quickanime');
		self::$AppVndEpsonSalt = new IANAMediaTypes('vnd.epson.salt', 'application/vnd.epson.salt');
		self::$AppVndEpsonSsf = new IANAMediaTypes('vnd.epson.ssf', 'application/vnd.epson.ssf');
		self::$AppVndEricssonQuickcall = new IANAMediaTypes('vnd.ericsson.quickcall', 'application/vnd.ericsson.quickcall');
		self::$AppVndEszigno3Xml = new IANAMediaTypes('vnd.eszigno3+xml', 'application/vnd.eszigno3+xml');
		self::$AppVndEtsiAocXml = new IANAMediaTypes('vnd.etsi.aoc+xml', 'application/vnd.etsi.aoc+xml');
		self::$AppVndEtsiAsicSZip = new IANAMediaTypes('vnd.etsi.asic-s+zip', 'application/vnd.etsi.asic-s+zip');
		self::$AppVndEtsiAsicEZip = new IANAMediaTypes('vnd.etsi.asic-e+zip', 'application/vnd.etsi.asic-e+zip');
		self::$AppVndEtsiCugXml = new IANAMediaTypes('vnd.etsi.cug+xml', 'application/vnd.etsi.cug+xml');
		self::$AppVndEtsiIptvcommandXml = new IANAMediaTypes('vnd.etsi.iptvcommand+xml', 'application/vnd.etsi.iptvcommand+xml');
		self::$AppVndEtsiIptvdiscoveryXml = new IANAMediaTypes('vnd.etsi.iptvdiscovery+xml', 'application/vnd.etsi.iptvdiscovery+xml');
		self::$AppVndEtsiIptvprofileXml = new IANAMediaTypes('vnd.etsi.iptvprofile+xml', 'application/vnd.etsi.iptvprofile+xml');
		self::$AppVndEtsiIptvsadBcXml = new IANAMediaTypes('vnd.etsi.iptvsad-bc+xml', 'application/vnd.etsi.iptvsad-bc+xml');
		self::$AppVndEtsiIptvsadCodXml = new IANAMediaTypes('vnd.etsi.iptvsad-cod+xml', 'application/vnd.etsi.iptvsad-cod+xml');
		self::$AppVndEtsiIptvsadNpvrXml = new IANAMediaTypes('vnd.etsi.iptvsad-npvr+xml', 'application/vnd.etsi.iptvsad-npvr+xml');
		self::$AppVndEtsiIptvserviceXml = new IANAMediaTypes('vnd.etsi.iptvservice+xml', 'application/vnd.etsi.iptvservice+xml');
		self::$AppVndEtsiIptvsyncXml = new IANAMediaTypes('vnd.etsi.iptvsync+xml', 'application/vnd.etsi.iptvsync+xml');
		self::$AppVndEtsiIptvueprofileXml = new IANAMediaTypes('vnd.etsi.iptvueprofile+xml', 'application/vnd.etsi.iptvueprofile+xml');
		self::$AppVndEtsiMcidXml = new IANAMediaTypes('vnd.etsi.mcid+xml', 'application/vnd.etsi.mcid+xml');
		self::$AppVndEtsiMheg5 = new IANAMediaTypes('vnd.etsi.mheg5', 'application/vnd.etsi.mheg5');
		self::$AppVndEtsiOverloadControlPolicyDatasetXml = new IANAMediaTypes('vnd.etsi.overload-control-policy-dataset+xml', 'application/vnd.etsi.overload-control-policy-dataset+xml');
		self::$AppVndEtsiPstnXml = new IANAMediaTypes('vnd.etsi.pstn+xml', 'application/vnd.etsi.pstn+xml');
		self::$AppVndEtsiSciXml = new IANAMediaTypes('vnd.etsi.sci+xml', 'application/vnd.etsi.sci+xml');
		self::$AppVndEtsiSimservsXml = new IANAMediaTypes('vnd.etsi.simservs+xml', 'application/vnd.etsi.simservs+xml');
		self::$AppVndEtsiTimestampToken = new IANAMediaTypes('vnd.etsi.timestamp-token', 'application/vnd.etsi.timestamp-token');
		self::$AppVndEtsiTslXml = new IANAMediaTypes('vnd.etsi.tsl+xml', 'application/vnd.etsi.tsl+xml');
		self::$AppVndEtsiTslDer = new IANAMediaTypes('vnd.etsi.tsl.der', 'application/vnd.etsi.tsl.der');
		self::$AppVndEudoraData = new IANAMediaTypes('vnd.eudora.data', 'application/vnd.eudora.data');
		self::$AppVndEzpixAlbum = new IANAMediaTypes('vnd.ezpix-album', 'application/vnd.ezpix-album');
		self::$AppVndEzpixPackage = new IANAMediaTypes('vnd.ezpix-package', 'application/vnd.ezpix-package');
		self::$AppVndFSecureMobile = new IANAMediaTypes('vnd.f-secure.mobile', 'application/vnd.f-secure.mobile');
		self::$AppVndFastcopyDiskImage = new IANAMediaTypes('vnd.fastcopy-disk-image', 'application/vnd.fastcopy-disk-image');
		self::$AppVndFdf = new IANAMediaTypes('vnd.fdf', 'application/vnd-fdf');
		self::$AppVndFdsnMseed = new IANAMediaTypes('vnd.fdsn.mseed', 'application/vnd.fdsn.mseed');
		self::$AppVndFdsnSeed = new IANAMediaTypes('vnd.fdsn.seed', 'application/vnd.fdsn.seed');
		self::$AppVndFfsns = new IANAMediaTypes('vnd.ffsns', 'application/vnd.ffsns');
		self::$AppVndFints = new IANAMediaTypes('vnd.fints', 'application/vnd.fints');
		self::$AppVndFlographit = new IANAMediaTypes('vnd.FloGraphIt', 'application/vnd.FloGraphIt');
		self::$AppVndFluxtimeClip = new IANAMediaTypes('vnd.fluxtime.clip', 'application/vnd.fluxtime.clip');
		self::$AppVndFontFontforgeSfd = new IANAMediaTypes('vnd.font-fontforge-sfd', 'application/vnd.font-fontforge-sfd');
		self::$AppVndFramemaker = new IANAMediaTypes('vnd.framemaker', 'application/vnd.framemaker');
		self::$AppVndFrogansFnc = new IANAMediaTypes('vnd.frogans.fnc', 'application/vnd.frogans.fnc');
		self::$AppVndFrogansLtf = new IANAMediaTypes('vnd.frogans.ltf', 'application/vnd.frogans.ltf');
		self::$AppVndFscWeblaunch = new IANAMediaTypes('vnd.fsc.weblaunch', 'application/vnd.fsc.weblaunch');
		self::$AppVndFujitsuOasys = new IANAMediaTypes('vnd.fujitsu.oasys', 'application/vnd.fujitsu.oasys');
		self::$AppVndFujitsuOasys2 = new IANAMediaTypes('vnd.fujitsu.oasys2', 'application/vnd.fujitsu.oasys2');
		self::$AppVndFujitsuOasys3 = new IANAMediaTypes('vnd.fujitsu.oasys3', 'application/vnd.fujitsu.oasys3');
		self::$AppVndFujitsuOasysgp = new IANAMediaTypes('vnd.fujitsu.oasysgp', 'application/vnd.fujitsu.oasysgp');
		self::$AppVndFujitsuOasysprs = new IANAMediaTypes('vnd.fujitsu.oasysprs', 'application/vnd.fujitsu.oasysprs');
		self::$AppVndFujixeroxArt4 = new IANAMediaTypes('vnd.fujixerox.ART4', 'application/vnd.fujixerox.ART4');
		self::$AppVndFujixeroxArtEx = new IANAMediaTypes('vnd.fujixerox.ART-EX', 'application/vnd.fujixerox.ART-EX');
		self::$AppVndFujixeroxDdd = new IANAMediaTypes('vnd.fujixerox.ddd', 'application/vnd.fujixerox.ddd');
		self::$AppVndFujixeroxDocuworks = new IANAMediaTypes('vnd.fujixerox.docuworks', 'application/vnd.fujixerox.docuworks');
		self::$AppVndFujixeroxDocuworksBinder = new IANAMediaTypes('vnd.fujixerox.docuworks.binder', 'application/vnd.fujixerox.docuworks.binder');
		self::$AppVndFujixeroxDocuworksContainer = new IANAMediaTypes('vnd.fujixerox.docuworks.container', 'application/vnd.fujixerox.docuworks.container');
		self::$AppVndFujixeroxHbpl = new IANAMediaTypes('vnd.fujixerox.HBPL', 'application/vnd.fujixerox.HBPL');
		self::$AppVndFutMisnet = new IANAMediaTypes('vnd.fut-misnet', 'application/vnd.fut-misnet');
		self::$AppVndFuzzysheet = new IANAMediaTypes('vnd.fuzzysheet', 'application/vnd.fuzzysheet');
		self::$AppVndGenomatixTuxedo = new IANAMediaTypes('vnd.genomatix.tuxedo', 'application/vnd.genomatix.tuxedo');
		self::$AppVndGeoJson = new IANAMediaTypes('vnd.geo+json', 'application/vnd.geo+json');
		self::$AppVndGeocubeXmlObsoletedByRequest = new IANAMediaTypes('vnd.geocube+xml - OBSOLETED by request', 'application/vnd.geocube+xml');
		self::$AppVndGeogebraFile = new IANAMediaTypes('vnd.geogebra.file', 'application/vnd.geogebra.file');
		self::$AppVndGeogebraTool = new IANAMediaTypes('vnd.geogebra.tool', 'application/vnd.geogebra.tool');
		self::$AppVndGeometryExplorer = new IANAMediaTypes('vnd.geometry-explorer', 'application/vnd.geometry-explorer');
		self::$AppVndGeonext = new IANAMediaTypes('vnd.geonext', 'application/vnd.geonext');
		self::$AppVndGeoplan = new IANAMediaTypes('vnd.geoplan', 'application/vnd.geoplan');
		self::$AppVndGeospace = new IANAMediaTypes('vnd.geospace', 'application/vnd.geospace');
		self::$AppVndGerber = new IANAMediaTypes('vnd.gerber', 'application/vnd.gerber');
		self::$AppVndGlobalplatformCardContentMgt = new IANAMediaTypes('vnd.globalplatform.card-content-mgt', 'application/vnd.globalplatform.card-content-mgt');
		self::$AppVndGlobalplatformCardContentMgtResponse = new IANAMediaTypes('vnd.globalplatform.card-content-mgt-response', 'application/vnd.globalplatform.card-content-mgt-response');
		self::$AppVndGmxDeprecated = new IANAMediaTypes('vnd.gmx - DEPRECATED', 'application/vnd.gmx');
		self::$AppVndGoogleEarthKmlXml = new IANAMediaTypes('vnd.google-earth.kml+xml', 'application/vnd.google-earth.kml+xml');
		self::$AppVndGoogleEarthKmz = new IANAMediaTypes('vnd.google-earth.kmz', 'application/vnd.google-earth.kmz');
		self::$AppVndGovSkEFormXml = new IANAMediaTypes('vnd.gov.sk.e-form+xml', 'application/vnd.gov.sk.e-form+xml');
		self::$AppVndGovSkEFormZip = new IANAMediaTypes('vnd.gov.sk.e-form+zip', 'application/vnd.gov.sk.e-form+zip');
		self::$AppVndGovSkXmldatacontainerXml = new IANAMediaTypes('vnd.gov.sk.xmldatacontainer+xml', 'application/vnd.gov.sk.xmldatacontainer+xml');
		self::$AppVndGrafeq = new IANAMediaTypes('vnd.grafeq', 'application/vnd.grafeq');
		self::$AppVndGridmp = new IANAMediaTypes('vnd.gridmp', 'application/vnd.gridmp');
		self::$AppVndGrooveAccount = new IANAMediaTypes('vnd.groove-account', 'application/vnd.groove-account');
		self::$AppVndGrooveHelp = new IANAMediaTypes('vnd.groove-help', 'application/vnd.groove-help');
		self::$AppVndGrooveIdentityMessage = new IANAMediaTypes('vnd.groove-identity-message', 'application/vnd.groove-identity-message');
		self::$AppVndGrooveInjector = new IANAMediaTypes('vnd.groove-injector', 'application/vnd.groove-injector');
		self::$AppVndGrooveToolMessage = new IANAMediaTypes('vnd.groove-tool-message', 'application/vnd.groove-tool-message');
		self::$AppVndGrooveToolTemplate = new IANAMediaTypes('vnd.groove-tool-template', 'application/vnd.groove-tool-template');
		self::$AppVndGrooveVcard = new IANAMediaTypes('vnd.groove-vcard', 'application/vnd.groove-vcard');
		self::$AppVndHalJson = new IANAMediaTypes('vnd.hal+json', 'application/vnd.hal+json');
		self::$AppVndHalXml = new IANAMediaTypes('vnd.hal+xml', 'application/vnd.hal+xml');
		self::$AppVndHandheldEntertainmentXml = new IANAMediaTypes('vnd.HandHeld-Entertainment+xml', 'application/vnd.HandHeld-Entertainment+xml');
		self::$AppVndHbci = new IANAMediaTypes('vnd.hbci', 'application/vnd.hbci');
		self::$AppVndHclBireports = new IANAMediaTypes('vnd.hcl-bireports', 'application/vnd.hcl-bireports');
		self::$AppVndHerokuJson = new IANAMediaTypes('vnd.heroku+json', 'application/vnd.heroku+json');
		self::$AppVndHheLessonPlayer = new IANAMediaTypes('vnd.hhe.lesson-player', 'application/vnd.hhe.lesson-player');
		self::$AppVndHpHpgl = new IANAMediaTypes('vnd.hp-HPGL', 'application/vnd.hp-HPGL');
		self::$AppVndHpHpid = new IANAMediaTypes('vnd.hp-hpid', 'application/vnd.hp-hpid');
		self::$AppVndHpHps = new IANAMediaTypes('vnd.hp-hps', 'application/vnd.hp-hps');
		self::$AppVndHpJlyt = new IANAMediaTypes('vnd.hp-jlyt', 'application/vnd.hp-jlyt');
		self::$AppVndHpPcl = new IANAMediaTypes('vnd.hp-PCL', 'application/vnd.hp-PCL');
		self::$AppVndHpPclxl = new IANAMediaTypes('vnd.hp-PCLXL', 'application/vnd.hp-PCLXL');
		self::$AppVndHttphone = new IANAMediaTypes('vnd.httphone', 'application/vnd.httphone');
		self::$AppVndHydrostatixSofData = new IANAMediaTypes('vnd.hydrostatix.sof-data', 'application/vnd.hydrostatix.sof-data');
		self::$AppVndHyperdriveJson = new IANAMediaTypes('vnd.hyperdrive+json', 'application/vnd.hyperdrive+json');
		self::$AppVndHzn3DCrossword = new IANAMediaTypes('vnd.hzn-3d-crossword', 'application/vnd.hzn-3d-crossword');
		self::$AppVndIbmAfplinedata = new IANAMediaTypes('vnd.ibm.afplinedata', 'application/vnd.ibm.afplinedata');
		self::$AppVndIbmElectronicMedia = new IANAMediaTypes('vnd.ibm.electronic-media', 'application/vnd.ibm.electronic-media');
		self::$AppVndIbmMinipay = new IANAMediaTypes('vnd.ibm.MiniPay', 'application/vnd.ibm.MiniPay');
		self::$AppVndIbmModcap = new IANAMediaTypes('vnd.ibm.modcap', 'application/vnd.ibm.modcap');
		self::$AppVndIbmRightsManagement = new IANAMediaTypes('vnd.ibm.rights-management', 'application/vnd.ibm.rights-management');
		self::$AppVndIbmSecureContainer = new IANAMediaTypes('vnd.ibm.secure-container', 'application/vnd.ibm.secure-container');
		self::$AppVndIccprofile = new IANAMediaTypes('vnd.iccprofile', 'application/vnd.iccprofile');
		self::$AppVndIeee1905 = new IANAMediaTypes('vnd.ieee.1905', 'application/vnd.ieee.1905');
		self::$AppVndIgloader = new IANAMediaTypes('vnd.igloader', 'application/vnd.igloader');
		self::$AppVndImmervisionIvp = new IANAMediaTypes('vnd.immervision-ivp', 'application/vnd.immervision-ivp');
		self::$AppVndImmervisionIvu = new IANAMediaTypes('vnd.immervision-ivu', 'application/vnd.immervision-ivu');
		self::$AppVndImsImsccv1P1 = new IANAMediaTypes('vnd.ims.imsccv1p1', 'application/vnd.ims.imsccv1p1');
		self::$AppVndImsImsccv1P2 = new IANAMediaTypes('vnd.ims.imsccv1p2', 'application/vnd.ims.imsccv1p2');
		self::$AppVndImsImsccv1P3 = new IANAMediaTypes('vnd.ims.imsccv1p3', 'application/vnd.ims.imsccv1p3');
		self::$AppVndImsLisV2ResultJson = new IANAMediaTypes('vnd.ims.lis.v2.result+json', 'application/vnd.ims.lis.v2.result+json');
		self::$AppVndImsLtiV2ToolconsumerprofileJson = new IANAMediaTypes('vnd.ims.lti.v2.toolconsumerprofile+json', 'application/vnd.ims.lti.v2.toolconsumerprofile+json');
		self::$AppVndImsLtiV2ToolproxyIdJson = new IANAMediaTypes('vnd.ims.lti.v2.toolproxy.id+json', 'application/vnd.ims.lti.v2.toolproxy.id+json');
		self::$AppVndImsLtiV2ToolproxyJson = new IANAMediaTypes('vnd.ims.lti.v2.toolproxy+json', 'application/vnd.ims.lti.v2.toolproxy+json');
		self::$AppVndImsLtiV2ToolsettingsJson = new IANAMediaTypes('vnd.ims.lti.v2.toolsettings+json', 'application/vnd.ims.lti.v2.toolsettings+json');
		self::$AppVndImsLtiV2ToolsettingsSimpleJson = new IANAMediaTypes('vnd.ims.lti.v2.toolsettings.simple+json', 'application/vnd.ims.lti.v2.toolsettings.simple+json');
		self::$AppVndInformedcontrolRmsXml = new IANAMediaTypes('vnd.informedcontrol.rms+xml', 'application/vnd.informedcontrol.rms+xml');
		self::$AppVndInfotechProject = new IANAMediaTypes('vnd.infotech.project', 'application/vnd.infotech.project');
		self::$AppVndInfotechProjectXml = new IANAMediaTypes('vnd.infotech.project+xml', 'application/vnd.infotech.project+xml');
		self::$AppVndInformixVisionaryObsoletedInFavorOfApplicationVndVisionary = new IANAMediaTypes('vnd.informix-visionary - OBSOLETED in favor of application/vnd.visionary', 'application/vnd.informix-visionary');
		self::$AppVndInnopathWampNotification = new IANAMediaTypes('vnd.innopath.wamp.notification', 'application/vnd.innopath.wamp.notification');
		self::$AppVndInsorsIgm = new IANAMediaTypes('vnd.insors.igm', 'application/vnd.insors.igm');
		self::$AppVndInterconFormnet = new IANAMediaTypes('vnd.intercon.formnet', 'application/vnd.intercon.formnet');
		self::$AppVndIntergeo = new IANAMediaTypes('vnd.intergeo', 'application/vnd.intergeo');
		self::$AppVndIntertrustDigibox = new IANAMediaTypes('vnd.intertrust.digibox', 'application/vnd.intertrust.digibox');
		self::$AppVndIntertrustNncp = new IANAMediaTypes('vnd.intertrust.nncp', 'application/vnd.intertrust.nncp');
		self::$AppVndIntuQbo = new IANAMediaTypes('vnd.intu.qbo', 'application/vnd.intu.qbo');
		self::$AppVndIntuQfx = new IANAMediaTypes('vnd.intu.qfx', 'application/vnd.intu.qfx');
		self::$AppVndIptcG2CatalogitemXml = new IANAMediaTypes('vnd.iptc.g2.catalogitem+xml', 'application/vnd.iptc.g2.catalogitem+xml');
		self::$AppVndIptcG2ConceptitemXml = new IANAMediaTypes('vnd.iptc.g2.conceptitem+xml', 'application/vnd.iptc.g2.conceptitem+xml');
		self::$AppVndIptcG2KnowledgeitemXml = new IANAMediaTypes('vnd.iptc.g2.knowledgeitem+xml', 'application/vnd.iptc.g2.knowledgeitem+xml');
		self::$AppVndIptcG2NewsitemXml = new IANAMediaTypes('vnd.iptc.g2.newsitem+xml', 'application/vnd.iptc.g2.newsitem+xml');
		self::$AppVndIptcG2NewsmessageXml = new IANAMediaTypes('vnd.iptc.g2.newsmessage+xml', 'application/vnd.iptc.g2.newsmessage+xml');
		self::$AppVndIptcG2PackageitemXml = new IANAMediaTypes('vnd.iptc.g2.packageitem+xml', 'application/vnd.iptc.g2.packageitem+xml');
		self::$AppVndIptcG2PlanningitemXml = new IANAMediaTypes('vnd.iptc.g2.planningitem+xml', 'application/vnd.iptc.g2.planningitem+xml');
		self::$AppVndIpunpluggedRcprofile = new IANAMediaTypes('vnd.ipunplugged.rcprofile', 'application/vnd.ipunplugged.rcprofile');
		self::$AppVndIrepositoryPackageXml = new IANAMediaTypes('vnd.irepository.package+xml', 'application/vnd.irepository.package+xml');
		self::$AppVndIsXpr = new IANAMediaTypes('vnd.is-xpr', 'application/vnd.is-xpr');
		self::$AppVndIsacFcs = new IANAMediaTypes('vnd.isac.fcs', 'application/vnd.isac.fcs');
		self::$AppVndJam = new IANAMediaTypes('vnd.jam', 'application/vnd.jam');
		self::$AppVndJapannetDirectoryService = new IANAMediaTypes('vnd.japannet-directory-service', 'application/vnd.japannet-directory-service');
		self::$AppVndJapannetJpnstoreWakeup = new IANAMediaTypes('vnd.japannet-jpnstore-wakeup', 'application/vnd.japannet-jpnstore-wakeup');
		self::$AppVndJapannetPaymentWakeup = new IANAMediaTypes('vnd.japannet-payment-wakeup', 'application/vnd.japannet-payment-wakeup');
		self::$AppVndJapannetRegistration = new IANAMediaTypes('vnd.japannet-registration', 'application/vnd.japannet-registration');
		self::$AppVndJapannetRegistrationWakeup = new IANAMediaTypes('vnd.japannet-registration-wakeup', 'application/vnd.japannet-registration-wakeup');
		self::$AppVndJapannetSetstoreWakeup = new IANAMediaTypes('vnd.japannet-setstore-wakeup', 'application/vnd.japannet-setstore-wakeup');
		self::$AppVndJapannetVerification = new IANAMediaTypes('vnd.japannet-verification', 'application/vnd.japannet-verification');
		self::$AppVndJapannetVerificationWakeup = new IANAMediaTypes('vnd.japannet-verification-wakeup', 'application/vnd.japannet-verification-wakeup');
		self::$AppVndJcpJavameMidletRms = new IANAMediaTypes('vnd.jcp.javame.midlet-rms', 'application/vnd.jcp.javame.midlet-rms');
		self::$AppVndJisp = new IANAMediaTypes('vnd.jisp', 'application/vnd.jisp');
		self::$AppVndJoostJodaArchive = new IANAMediaTypes('vnd.joost.joda-archive', 'application/vnd.joost.joda-archive');
		self::$AppVndJskIsdnNgn = new IANAMediaTypes('vnd.jsk.isdn-ngn', 'application/vnd.jsk.isdn-ngn');
		self::$AppVndKahootz = new IANAMediaTypes('vnd.kahootz', 'application/vnd.kahootz');
		self::$AppVndKdeKarbon = new IANAMediaTypes('vnd.kde.karbon', 'application/vnd.kde.karbon');
		self::$AppVndKdeKchart = new IANAMediaTypes('vnd.kde.kchart', 'application/vnd.kde.kchart');
		self::$AppVndKdeKformula = new IANAMediaTypes('vnd.kde.kformula', 'application/vnd.kde.kformula');
		self::$AppVndKdeKivio = new IANAMediaTypes('vnd.kde.kivio', 'application/vnd.kde.kivio');
		self::$AppVndKdeKontour = new IANAMediaTypes('vnd.kde.kontour', 'application/vnd.kde.kontour');
		self::$AppVndKdeKpresenter = new IANAMediaTypes('vnd.kde.kpresenter', 'application/vnd.kde.kpresenter');
		self::$AppVndKdeKspread = new IANAMediaTypes('vnd.kde.kspread', 'application/vnd.kde.kspread');
		self::$AppVndKdeKword = new IANAMediaTypes('vnd.kde.kword', 'application/vnd.kde.kword');
		self::$AppVndKenameaapp = new IANAMediaTypes('vnd.kenameaapp', 'application/vnd.kenameaapp');
		self::$AppVndKidspiration = new IANAMediaTypes('vnd.kidspiration', 'application/vnd.kidspiration');
		self::$AppVndKinar = new IANAMediaTypes('vnd.Kinar', 'application/vnd.Kinar');
		self::$AppVndKoan = new IANAMediaTypes('vnd.koan', 'application/vnd.koan');
		self::$AppVndKodakDescriptor = new IANAMediaTypes('vnd.kodak-descriptor', 'application/vnd.kodak-descriptor');
		self::$AppVndLasLasXml = new IANAMediaTypes('vnd.las.las+xml', 'application/vnd.las.las+xml');
		self::$AppVndLibertyRequestXml = new IANAMediaTypes('vnd.liberty-request+xml', 'application/vnd.liberty-request+xml');
		self::$AppVndLlamagraphicsLifeBalanceDesktop = new IANAMediaTypes('vnd.llamagraphics.life-balance.desktop', 'application/vnd.llamagraphics.life-balance.desktop');
		self::$AppVndLlamagraphicsLifeBalanceExchangeXml = new IANAMediaTypes('vnd.llamagraphics.life-balance.exchange+xml', 'application/vnd.llamagraphics.life-balance.exchange+xml');
		self::$AppVndLotus123 = new IANAMediaTypes('vnd.lotus-1-2-3', 'application/vnd.lotus-1-2-3');
		self::$AppVndLotusApproach = new IANAMediaTypes('vnd.lotus-approach', 'application/vnd.lotus-approach');
		self::$AppVndLotusFreelance = new IANAMediaTypes('vnd.lotus-freelance', 'application/vnd.lotus-freelance');
		self::$AppVndLotusNotes = new IANAMediaTypes('vnd.lotus-notes', 'application/vnd.lotus-notes');
		self::$AppVndLotusOrganizer = new IANAMediaTypes('vnd.lotus-organizer', 'application/vnd.lotus-organizer');
		self::$AppVndLotusScreencam = new IANAMediaTypes('vnd.lotus-screencam', 'application/vnd.lotus-screencam');
		self::$AppVndLotusWordpro = new IANAMediaTypes('vnd.lotus-wordpro', 'application/vnd.lotus-wordpro');
		self::$AppVndMacportsPortpkg = new IANAMediaTypes('vnd.macports.portpkg', 'application/vnd.macports.portpkg');
		self::$AppVndMarlinDrmActiontokenXml = new IANAMediaTypes('vnd.marlin.drm.actiontoken+xml', 'application/vnd.marlin.drm.actiontoken+xml');
		self::$AppVndMarlinDrmConftokenXml = new IANAMediaTypes('vnd.marlin.drm.conftoken+xml', 'application/vnd.marlin.drm.conftoken+xml');
		self::$AppVndMarlinDrmLicenseXml = new IANAMediaTypes('vnd.marlin.drm.license+xml', 'application/vnd.marlin.drm.license+xml');
		self::$AppVndMarlinDrmMdcf = new IANAMediaTypes('vnd.marlin.drm.mdcf', 'application/vnd.marlin.drm.mdcf');
		self::$AppVndMasonJson = new IANAMediaTypes('vnd.mason+json', 'application/vnd.mason+json');
		self::$AppVndMaxmindMaxmindDb = new IANAMediaTypes('vnd.maxmind.maxmind-db', 'application/vnd.maxmind.maxmind-db');
		self::$AppVndMcd = new IANAMediaTypes('vnd.mcd', 'application/vnd.mcd');
		self::$AppVndMedcalcdata = new IANAMediaTypes('vnd.medcalcdata', 'application/vnd.medcalcdata');
		self::$AppVndMediastationCdkey = new IANAMediaTypes('vnd.mediastation.cdkey', 'application/vnd.mediastation.cdkey');
		self::$AppVndMeridianSlingshot = new IANAMediaTypes('vnd.meridian-slingshot', 'application/vnd.meridian-slingshot');
		self::$AppVndMfer = new IANAMediaTypes('vnd.MFER', 'application/vnd.MFER');
		self::$AppVndMfmp = new IANAMediaTypes('vnd.mfmp', 'application/vnd.mfmp');
		self::$AppVndMicroJson = new IANAMediaTypes('vnd.micro+json', 'application/vnd.micro+json');
		self::$AppVndMicrografxFlo = new IANAMediaTypes('vnd.micrografx.flo', 'application/vnd.micrografx.flo');
		self::$AppVndMicrografxIgx = new IANAMediaTypes('vnd.micrografx.igx', 'application/vnd.micrografx-igx');
		self::$AppVndMicrosoftPortableExecutable = new IANAMediaTypes('vnd.microsoft.portable-executable', 'application/vnd.microsoft.portable-executable');
		self::$AppVndMieleJson = new IANAMediaTypes('vnd.miele+json', 'application/vnd.miele+json');
		self::$AppVndMif = new IANAMediaTypes('vnd.mif', 'application/vnd-mif');
		self::$AppVndMinisoftHp3000Save = new IANAMediaTypes('vnd.minisoft-hp3000-save', 'application/vnd.minisoft-hp3000-save');
		self::$AppVndMitsubishiMistyGuardTrustweb = new IANAMediaTypes('vnd.mitsubishi.misty-guard.trustweb', 'application/vnd.mitsubishi.misty-guard.trustweb');
		self::$AppVndMobiusDaf = new IANAMediaTypes('vnd.Mobius.DAF', 'application/vnd.Mobius.DAF');
		self::$AppVndMobiusDis = new IANAMediaTypes('vnd.Mobius.DIS', 'application/vnd.Mobius.DIS');
		self::$AppVndMobiusMbk = new IANAMediaTypes('vnd.Mobius.MBK', 'application/vnd.Mobius.MBK');
		self::$AppVndMobiusMqy = new IANAMediaTypes('vnd.Mobius.MQY', 'application/vnd.Mobius.MQY');
		self::$AppVndMobiusMsl = new IANAMediaTypes('vnd.Mobius.MSL', 'application/vnd.Mobius.MSL');
		self::$AppVndMobiusPlc = new IANAMediaTypes('vnd.Mobius.PLC', 'application/vnd.Mobius.PLC');
		self::$AppVndMobiusTxf = new IANAMediaTypes('vnd.Mobius.TXF', 'application/vnd.Mobius.TXF');
		self::$AppVndMophunApplication = new IANAMediaTypes('vnd.mophun.application', 'application/vnd.mophun.application');
		self::$AppVndMophunCertificate = new IANAMediaTypes('vnd.mophun.certificate', 'application/vnd.mophun.certificate');
		self::$AppVndMotorolaFlexsuite = new IANAMediaTypes('vnd.motorola.flexsuite', 'application/vnd.motorola.flexsuite');
		self::$AppVndMotorolaFlexsuiteAdsi = new IANAMediaTypes('vnd.motorola.flexsuite.adsi', 'application/vnd.motorola.flexsuite.adsi');
		self::$AppVndMotorolaFlexsuiteFis = new IANAMediaTypes('vnd.motorola.flexsuite.fis', 'application/vnd.motorola.flexsuite.fis');
		self::$AppVndMotorolaFlexsuiteGotap = new IANAMediaTypes('vnd.motorola.flexsuite.gotap', 'application/vnd.motorola.flexsuite.gotap');
		self::$AppVndMotorolaFlexsuiteKmr = new IANAMediaTypes('vnd.motorola.flexsuite.kmr', 'application/vnd.motorola.flexsuite.kmr');
		self::$AppVndMotorolaFlexsuiteTtc = new IANAMediaTypes('vnd.motorola.flexsuite.ttc', 'application/vnd.motorola.flexsuite.ttc');
		self::$AppVndMotorolaFlexsuiteWem = new IANAMediaTypes('vnd.motorola.flexsuite.wem', 'application/vnd.motorola.flexsuite.wem');
		self::$AppVndMotorolaIprm = new IANAMediaTypes('vnd.motorola.iprm', 'application/vnd.motorola.iprm');
		self::$AppVndMozillaXulXml = new IANAMediaTypes('vnd.mozilla.xul+xml', 'application/vnd.mozilla.xul+xml');
		self::$AppVndMsArtgalry = new IANAMediaTypes('vnd.ms-artgalry', 'application/vnd.ms-artgalry');
		self::$AppVndMsAsf = new IANAMediaTypes('vnd.ms-asf', 'application/vnd.ms-asf');
		self::$AppVndMsCabCompressed = new IANAMediaTypes('vnd.ms-cab-compressed', 'application/vnd.ms-cab-compressed');
		self::$AppVndMs3Mfdocument = new IANAMediaTypes('vnd.ms-3mfdocument', 'application/vnd.ms-3mfdocument');
		self::$AppVndMsExcel = new IANAMediaTypes('vnd.ms-excel', 'application/vnd.ms-excel');
		self::$AppVndMsExcelAddinMacroenabled12 = new IANAMediaTypes('vnd.ms-excel.addin.macroEnabled.12', 'application/vnd.ms-excel.addin.macroEnabled.12');
		self::$AppVndMsExcelSheetBinaryMacroenabled12 = new IANAMediaTypes('vnd.ms-excel.sheet.binary.macroEnabled.12', 'application/vnd.ms-excel.sheet.binary.macroEnabled.12');
		self::$AppVndMsExcelSheetMacroenabled12 = new IANAMediaTypes('vnd.ms-excel.sheet.macroEnabled.12', 'application/vnd.ms-excel.sheet.macroEnabled.12');
		self::$AppVndMsExcelTemplateMacroenabled12 = new IANAMediaTypes('vnd.ms-excel.template.macroEnabled.12', 'application/vnd.ms-excel.template.macroEnabled.12');
		self::$AppVndMsFontobject = new IANAMediaTypes('vnd.ms-fontobject', 'application/vnd.ms-fontobject');
		self::$AppVndMsHtmlhelp = new IANAMediaTypes('vnd.ms-htmlhelp', 'application/vnd.ms-htmlhelp');
		self::$AppVndMsIms = new IANAMediaTypes('vnd.ms-ims', 'application/vnd.ms-ims');
		self::$AppVndMsLrm = new IANAMediaTypes('vnd.ms-lrm', 'application/vnd.ms-lrm');
		self::$AppVndMsOfficeActivexXml = new IANAMediaTypes('vnd.ms-office.activeX+xml', 'application/vnd.ms-office.activeX+xml');
		self::$AppVndMsOfficetheme = new IANAMediaTypes('vnd.ms-officetheme', 'application/vnd.ms-officetheme');
		self::$AppVndMsPlayreadyInitiatorXml = new IANAMediaTypes('vnd.ms-playready.initiator+xml', 'application/vnd.ms-playready.initiator+xml');
		self::$AppVndMsPowerpoint = new IANAMediaTypes('vnd.ms-powerpoint', 'application/vnd.ms-powerpoint');
		self::$AppVndMsPowerpointAddinMacroenabled12 = new IANAMediaTypes('vnd.ms-powerpoint.addin.macroEnabled.12', 'application/vnd.ms-powerpoint.addin.macroEnabled.12');
		self::$AppVndMsPowerpointPresentationMacroenabled12 = new IANAMediaTypes('vnd.ms-powerpoint.presentation.macroEnabled.12', 'application/vnd.ms-powerpoint.presentation.macroEnabled.12');
		self::$AppVndMsPowerpointSlideMacroenabled12 = new IANAMediaTypes('vnd.ms-powerpoint.slide.macroEnabled.12', 'application/vnd.ms-powerpoint.slide.macroEnabled.12');
		self::$AppVndMsPowerpointSlideshowMacroenabled12 = new IANAMediaTypes('vnd.ms-powerpoint.slideshow.macroEnabled.12', 'application/vnd.ms-powerpoint.slideshow.macroEnabled.12');
		self::$AppVndMsPowerpointTemplateMacroenabled12 = new IANAMediaTypes('vnd.ms-powerpoint.template.macroEnabled.12', 'application/vnd.ms-powerpoint.template.macroEnabled.12');
		self::$AppVndMsProject = new IANAMediaTypes('vnd.ms-project', 'application/vnd.ms-project');
		self::$AppVndMsTnef = new IANAMediaTypes('vnd.ms-tnef', 'application/vnd.ms-tnef');
		self::$AppVndMsWindowsPrinterpairing = new IANAMediaTypes('vnd.ms-windows.printerpairing', 'application/vnd.ms-windows.printerpairing');
		self::$AppVndMsWmdrmLicChlgReq = new IANAMediaTypes('vnd.ms-wmdrm.lic-chlg-req', 'application/vnd.ms-wmdrm.lic-chlg-req');
		self::$AppVndMsWmdrmLicResp = new IANAMediaTypes('vnd.ms-wmdrm.lic-resp', 'application/vnd.ms-wmdrm.lic-resp');
		self::$AppVndMsWmdrmMeterChlgReq = new IANAMediaTypes('vnd.ms-wmdrm.meter-chlg-req', 'application/vnd.ms-wmdrm.meter-chlg-req');
		self::$AppVndMsWmdrmMeterResp = new IANAMediaTypes('vnd.ms-wmdrm.meter-resp', 'application/vnd.ms-wmdrm.meter-resp');
		self::$AppVndMsWordDocumentMacroenabled12 = new IANAMediaTypes('vnd.ms-word.document.macroEnabled.12', 'application/vnd.ms-word.document.macroEnabled.12');
		self::$AppVndMsWordTemplateMacroenabled12 = new IANAMediaTypes('vnd.ms-word.template.macroEnabled.12', 'application/vnd.ms-word.template.macroEnabled.12');
		self::$AppVndMsWorks = new IANAMediaTypes('vnd.ms-works', 'application/vnd.ms-works');
		self::$AppVndMsWpl = new IANAMediaTypes('vnd.ms-wpl', 'application/vnd.ms-wpl');
		self::$AppVndMsXpsdocument = new IANAMediaTypes('vnd.ms-xpsdocument', 'application/vnd.ms-xpsdocument');
		self::$AppVndMsaDiskImage = new IANAMediaTypes('vnd.msa-disk-image', 'application/vnd.msa-disk-image');
		self::$AppVndMseq = new IANAMediaTypes('vnd.mseq', 'application/vnd.mseq');
		self::$AppVndMsign = new IANAMediaTypes('vnd.msign', 'application/vnd.msign');
		self::$AppVndMultiadCreator = new IANAMediaTypes('vnd.multiad.creator', 'application/vnd.multiad.creator');
		self::$AppVndMultiadCreatorCif = new IANAMediaTypes('vnd.multiad.creator.cif', 'application/vnd.multiad.creator.cif');
		self::$AppVndMusician = new IANAMediaTypes('vnd.musician', 'application/vnd.musician');
		self::$AppVndMusicNiff = new IANAMediaTypes('vnd.music-niff', 'application/vnd.music-niff');
		self::$AppVndMuveeStyle = new IANAMediaTypes('vnd.muvee.style', 'application/vnd.muvee.style');
		self::$AppVndMynfc = new IANAMediaTypes('vnd.mynfc', 'application/vnd.mynfc');
		self::$AppVndNcdControl = new IANAMediaTypes('vnd.ncd.control', 'application/vnd.ncd.control');
		self::$AppVndNcdReference = new IANAMediaTypes('vnd.ncd.reference', 'application/vnd.ncd.reference');
		self::$AppVndNervana = new IANAMediaTypes('vnd.nervana', 'application/vnd.nervana');
		self::$AppVndNetfpx = new IANAMediaTypes('vnd.netfpx', 'application/vnd.netfpx');
		self::$AppVndNeurolanguageNlu = new IANAMediaTypes('vnd.neurolanguage.nlu', 'application/vnd.neurolanguage.nlu');
		self::$AppVndNintendoSnesRom = new IANAMediaTypes('vnd.nintendo.snes.rom', 'application/vnd.nintendo.snes.rom');
		self::$AppVndNintendoNitroRom = new IANAMediaTypes('vnd.nintendo.nitro.rom', 'application/vnd.nintendo.nitro.rom');
		self::$AppVndNitf = new IANAMediaTypes('vnd.nitf', 'application/vnd.nitf');
		self::$AppVndNoblenetDirectory = new IANAMediaTypes('vnd.noblenet-directory', 'application/vnd.noblenet-directory');
		self::$AppVndNoblenetSealer = new IANAMediaTypes('vnd.noblenet-sealer', 'application/vnd.noblenet-sealer');
		self::$AppVndNoblenetWeb = new IANAMediaTypes('vnd.noblenet-web', 'application/vnd.noblenet-web');
		self::$AppVndNokiaCatalogs = new IANAMediaTypes('vnd.nokia.catalogs', 'application/vnd.nokia.catalogs');
		self::$AppVndNokiaConmlWbxml = new IANAMediaTypes('vnd.nokia.conml+wbxml', 'application/vnd.nokia.conml+wbxml');
		self::$AppVndNokiaConmlXml = new IANAMediaTypes('vnd.nokia.conml+xml', 'application/vnd.nokia.conml+xml');
		self::$AppVndNokiaIptvConfigXml = new IANAMediaTypes('vnd.nokia.iptv.config+xml', 'application/vnd.nokia.iptv.config+xml');
		self::$AppVndNokiaIsdsRadioPresets = new IANAMediaTypes('vnd.nokia.iSDS-radio-presets', 'application/vnd.nokia.iSDS-radio-presets');
		self::$AppVndNokiaLandmarkWbxml = new IANAMediaTypes('vnd.nokia.landmark+wbxml', 'application/vnd.nokia.landmark+wbxml');
		self::$AppVndNokiaLandmarkXml = new IANAMediaTypes('vnd.nokia.landmark+xml', 'application/vnd.nokia.landmark+xml');
		self::$AppVndNokiaLandmarkcollectionXml = new IANAMediaTypes('vnd.nokia.landmarkcollection+xml', 'application/vnd.nokia.landmarkcollection+xml');
		self::$AppVndNokiaNcd = new IANAMediaTypes('vnd.nokia.ncd', 'application/vnd.nokia.ncd');
		self::$AppVndNokiaNGageAcXml = new IANAMediaTypes('vnd.nokia.n-gage.ac+xml', 'application/vnd.nokia.n-gage.ac+xml');
		self::$AppVndNokiaNGageData = new IANAMediaTypes('vnd.nokia.n-gage.data', 'application/vnd.nokia.n-gage.data');
		self::$AppVndNokiaNGageSymbianInstallObsoleteNoReplacementGiven = new IANAMediaTypes('vnd.nokia.n-gage.symbian.install - OBSOLETE; no replacement given', 'application/vnd.nokia.n-gage.symbian.install');
		self::$AppVndNokiaPcdWbxml = new IANAMediaTypes('vnd.nokia.pcd+wbxml', 'application/vnd.nokia.pcd+wbxml');
		self::$AppVndNokiaPcdXml = new IANAMediaTypes('vnd.nokia.pcd+xml', 'application/vnd.nokia.pcd+xml');
		self::$AppVndNokiaRadioPreset = new IANAMediaTypes('vnd.nokia.radio-preset', 'application/vnd.nokia.radio-preset');
		self::$AppVndNokiaRadioPresets = new IANAMediaTypes('vnd.nokia.radio-presets', 'application/vnd.nokia.radio-presets');
		self::$AppVndNovadigmEdm = new IANAMediaTypes('vnd.novadigm.EDM', 'application/vnd.novadigm.EDM');
		self::$AppVndNovadigmEdx = new IANAMediaTypes('vnd.novadigm.EDX', 'application/vnd.novadigm.EDX');
		self::$AppVndNovadigmExt = new IANAMediaTypes('vnd.novadigm.EXT', 'application/vnd.novadigm.EXT');
		self::$AppVndNttLocalContentShare = new IANAMediaTypes('vnd.ntt-local.content-share', 'application/vnd.ntt-local.content-share');
		self::$AppVndNttLocalFileTransfer = new IANAMediaTypes('vnd.ntt-local.file-transfer', 'application/vnd.ntt-local.file-transfer');
		self::$AppVndNttLocalOgwRemoteAccess = new IANAMediaTypes('vnd.ntt-local.ogw_remote-access', 'application/vnd.ntt-local.ogw_remote-access');
		self::$AppVndNttLocalSipTaRemote = new IANAMediaTypes('vnd.ntt-local.sip-ta_remote', 'application/vnd.ntt-local.sip-ta_remote');
		self::$AppVndNttLocalSipTaTcpStream = new IANAMediaTypes('vnd.ntt-local.sip-ta_tcp_stream', 'application/vnd.ntt-local.sip-ta_tcp_stream');
		self::$AppVndOasisOpendocumentChart = new IANAMediaTypes('vnd.oasis.opendocument.chart', 'application/vnd.oasis.opendocument.chart');
		self::$AppVndOasisOpendocumentChartTemplate = new IANAMediaTypes('vnd.oasis.opendocument.chart-template', 'application/vnd.oasis.opendocument.chart-template');
		self::$AppVndOasisOpendocumentDatabase = new IANAMediaTypes('vnd.oasis.opendocument.database', 'application/vnd.oasis.opendocument.database');
		self::$AppVndOasisOpendocumentFormula = new IANAMediaTypes('vnd.oasis.opendocument.formula', 'application/vnd.oasis.opendocument.formula');
		self::$AppVndOasisOpendocumentFormulaTemplate = new IANAMediaTypes('vnd.oasis.opendocument.formula-template', 'application/vnd.oasis.opendocument.formula-template');
		self::$AppVndOasisOpendocumentGraphics = new IANAMediaTypes('vnd.oasis.opendocument.graphics', 'application/vnd.oasis.opendocument.graphics');
		self::$AppVndOasisOpendocumentGraphicsTemplate = new IANAMediaTypes('vnd.oasis.opendocument.graphics-template', 'application/vnd.oasis.opendocument.graphics-template');
		self::$AppVndOasisOpendocumentImage = new IANAMediaTypes('vnd.oasis.opendocument.image', 'application/vnd.oasis.opendocument.image');
		self::$AppVndOasisOpendocumentImageTemplate = new IANAMediaTypes('vnd.oasis.opendocument.image-template', 'application/vnd.oasis.opendocument.image-template');
		self::$AppVndOasisOpendocumentPresentation = new IANAMediaTypes('vnd.oasis.opendocument.presentation', 'application/vnd.oasis.opendocument.presentation');
		self::$AppVndOasisOpendocumentPresentationTemplate = new IANAMediaTypes('vnd.oasis.opendocument.presentation-template', 'application/vnd.oasis.opendocument.presentation-template');
		self::$AppVndOasisOpendocumentSpreadsheet = new IANAMediaTypes('vnd.oasis.opendocument.spreadsheet', 'application/vnd.oasis.opendocument.spreadsheet');
		self::$AppVndOasisOpendocumentSpreadsheetTemplate = new IANAMediaTypes('vnd.oasis.opendocument.spreadsheet-template', 'application/vnd.oasis.opendocument.spreadsheet-template');
		self::$AppVndOasisOpendocumentText = new IANAMediaTypes('vnd.oasis.opendocument.text', 'application/vnd.oasis.opendocument.text');
		self::$AppVndOasisOpendocumentTextMaster = new IANAMediaTypes('vnd.oasis.opendocument.text-master', 'application/vnd.oasis.opendocument.text-master');
		self::$AppVndOasisOpendocumentTextTemplate = new IANAMediaTypes('vnd.oasis.opendocument.text-template', 'application/vnd.oasis.opendocument.text-template');
		self::$AppVndOasisOpendocumentTextWeb = new IANAMediaTypes('vnd.oasis.opendocument.text-web', 'application/vnd.oasis.opendocument.text-web');
		self::$AppVndObn = new IANAMediaTypes('vnd.obn', 'application/vnd.obn');
		self::$AppVndOftnL10NJson = new IANAMediaTypes('vnd.oftn.l10n+json', 'application/vnd.oftn.l10n+json');
		self::$AppVndOipfContentaccessdownloadXml = new IANAMediaTypes('vnd.oipf.contentaccessdownload+xml', 'application/vnd.oipf.contentaccessdownload+xml');
		self::$AppVndOipfContentaccessstreamingXml = new IANAMediaTypes('vnd.oipf.contentaccessstreaming+xml', 'application/vnd.oipf.contentaccessstreaming+xml');
		self::$AppVndOipfCspgHexbinary = new IANAMediaTypes('vnd.oipf.cspg-hexbinary', 'application/vnd.oipf.cspg-hexbinary');
		self::$AppVndOipfDaeSvgXml = new IANAMediaTypes('vnd.oipf.dae.svg+xml', 'application/vnd.oipf.dae.svg+xml');
		self::$AppVndOipfDaeXhtmlXml = new IANAMediaTypes('vnd.oipf.dae.xhtml+xml', 'application/vnd.oipf.dae.xhtml+xml');
		self::$AppVndOipfMippvcontrolmessageXml = new IANAMediaTypes('vnd.oipf.mippvcontrolmessage+xml', 'application/vnd.oipf.mippvcontrolmessage+xml');
		self::$AppVndOipfPaeGem = new IANAMediaTypes('vnd.oipf.pae.gem', 'application/vnd.oipf.pae.gem');
		self::$AppVndOipfSpdiscoveryXml = new IANAMediaTypes('vnd.oipf.spdiscovery+xml', 'application/vnd.oipf.spdiscovery+xml');
		self::$AppVndOipfSpdlistXml = new IANAMediaTypes('vnd.oipf.spdlist+xml', 'application/vnd.oipf.spdlist+xml');
		self::$AppVndOipfUeprofileXml = new IANAMediaTypes('vnd.oipf.ueprofile+xml', 'application/vnd.oipf.ueprofile+xml');
		self::$AppVndOipfUserprofileXml = new IANAMediaTypes('vnd.oipf.userprofile+xml', 'application/vnd.oipf.userprofile+xml');
		self::$AppVndOlpcSugar = new IANAMediaTypes('vnd.olpc-sugar', 'application/vnd.olpc-sugar');
		self::$AppVndOmaBcastAssociatedProcedureParameterXml = new IANAMediaTypes('vnd.oma.bcast.associated-procedure-parameter+xml', 'application/vnd.oma.bcast.associated-procedure-parameter+xml');
		self::$AppVndOmaBcastDrmTriggerXml = new IANAMediaTypes('vnd.oma.bcast.drm-trigger+xml', 'application/vnd.oma.bcast.drm-trigger+xml');
		self::$AppVndOmaBcastImdXml = new IANAMediaTypes('vnd.oma.bcast.imd+xml', 'application/vnd.oma.bcast.imd+xml');
		self::$AppVndOmaBcastLtkm = new IANAMediaTypes('vnd.oma.bcast.ltkm', 'application/vnd.oma.bcast.ltkm');
		self::$AppVndOmaBcastNotificationXml = new IANAMediaTypes('vnd.oma.bcast.notification+xml', 'application/vnd.oma.bcast.notification+xml');
		self::$AppVndOmaBcastProvisioningtrigger = new IANAMediaTypes('vnd.oma.bcast.provisioningtrigger', 'application/vnd.oma.bcast.provisioningtrigger');
		self::$AppVndOmaBcastSgboot = new IANAMediaTypes('vnd.oma.bcast.sgboot', 'application/vnd.oma.bcast.sgboot');
		self::$AppVndOmaBcastSgddXml = new IANAMediaTypes('vnd.oma.bcast.sgdd+xml', 'application/vnd.oma.bcast.sgdd+xml');
		self::$AppVndOmaBcastSgdu = new IANAMediaTypes('vnd.oma.bcast.sgdu', 'application/vnd.oma.bcast.sgdu');
		self::$AppVndOmaBcastSimpleSymbolContainer = new IANAMediaTypes('vnd.oma.bcast.simple-symbol-container', 'application/vnd.oma.bcast.simple-symbol-container');
		self::$AppVndOmaBcastSmartcardTriggerXml = new IANAMediaTypes('vnd.oma.bcast.smartcard-trigger+xml', 'application/vnd.oma.bcast.smartcard-trigger+xml');
		self::$AppVndOmaBcastSprovXml = new IANAMediaTypes('vnd.oma.bcast.sprov+xml', 'application/vnd.oma.bcast.sprov+xml');
		self::$AppVndOmaBcastStkm = new IANAMediaTypes('vnd.oma.bcast.stkm', 'application/vnd.oma.bcast.stkm');
		self::$AppVndOmaCabAddressBookXml = new IANAMediaTypes('vnd.oma.cab-address-book+xml', 'application/vnd.oma.cab-address-book+xml');
		self::$AppVndOmaCabFeatureHandlerXml = new IANAMediaTypes('vnd.oma.cab-feature-handler+xml', 'application/vnd.oma.cab-feature-handler+xml');
		self::$AppVndOmaCabPccXml = new IANAMediaTypes('vnd.oma.cab-pcc+xml', 'application/vnd.oma.cab-pcc+xml');
		self::$AppVndOmaCabSubsInviteXml = new IANAMediaTypes('vnd.oma.cab-subs-invite+xml', 'application/vnd.oma.cab-subs-invite+xml');
		self::$AppVndOmaCabUserPrefsXml = new IANAMediaTypes('vnd.oma.cab-user-prefs+xml', 'application/vnd.oma.cab-user-prefs+xml');
		self::$AppVndOmaDcd = new IANAMediaTypes('vnd.oma.dcd', 'application/vnd.oma.dcd');
		self::$AppVndOmaDcdc = new IANAMediaTypes('vnd.oma.dcdc', 'application/vnd.oma.dcdc');
		self::$AppVndOmaDd2Xml = new IANAMediaTypes('vnd.oma.dd2+xml', 'application/vnd.oma.dd2+xml');
		self::$AppVndOmaDrmRisdXml = new IANAMediaTypes('vnd.oma.drm.risd+xml', 'application/vnd.oma.drm.risd+xml');
		self::$AppVndOmaGroupUsageListXml = new IANAMediaTypes('vnd.oma.group-usage-list+xml', 'application/vnd.oma.group-usage-list+xml');
		self::$AppVndOmaPalXml = new IANAMediaTypes('vnd.oma.pal+xml', 'application/vnd.oma.pal+xml');
		self::$AppVndOmaPocDetailedProgressReportXml = new IANAMediaTypes('vnd.oma.poc.detailed-progress-report+xml', 'application/vnd.oma.poc.detailed-progress-report+xml');
		self::$AppVndOmaPocFinalReportXml = new IANAMediaTypes('vnd.oma.poc.final-report+xml', 'application/vnd.oma.poc.final-report+xml');
		self::$AppVndOmaPocGroupsXml = new IANAMediaTypes('vnd.oma.poc.groups+xml', 'application/vnd.oma.poc.groups+xml');
		self::$AppVndOmaPocInvocationDescriptorXml = new IANAMediaTypes('vnd.oma.poc.invocation-descriptor+xml', 'application/vnd.oma.poc.invocation-descriptor+xml');
		self::$AppVndOmaPocOptimizedProgressReportXml = new IANAMediaTypes('vnd.oma.poc.optimized-progress-report+xml', 'application/vnd.oma.poc.optimized-progress-report+xml');
		self::$AppVndOmaPush = new IANAMediaTypes('vnd.oma.push', 'application/vnd.oma.push');
		self::$AppVndOmaScidmMessagesXml = new IANAMediaTypes('vnd.oma.scidm.messages+xml', 'application/vnd.oma.scidm.messages+xml');
		self::$AppVndOmaXcapDirectoryXml = new IANAMediaTypes('vnd.oma.xcap-directory+xml', 'application/vnd.oma.xcap-directory+xml');
		self::$AppVndOmadsEmailXml = new IANAMediaTypes('vnd.omads-email+xml', 'application/vnd.omads-email+xml');
		self::$AppVndOmadsFileXml = new IANAMediaTypes('vnd.omads-file+xml', 'application/vnd.omads-file+xml');
		self::$AppVndOmadsFolderXml = new IANAMediaTypes('vnd.omads-folder+xml', 'application/vnd.omads-folder+xml');
		self::$AppVndOmalocSuplInit = new IANAMediaTypes('vnd.omaloc-supl-init', 'application/vnd.omaloc-supl-init');
		self::$AppVndOmaScwsConfig = new IANAMediaTypes('vnd.oma-scws-config', 'application/vnd.oma-scws-config');
		self::$AppVndOmaScwsHttpRequest = new IANAMediaTypes('vnd.oma-scws-http-request', 'application/vnd.oma-scws-http-request');
		self::$AppVndOmaScwsHttpResponse = new IANAMediaTypes('vnd.oma-scws-http-response', 'application/vnd.oma-scws-http-response');
		self::$AppVndOpeneyeOeb = new IANAMediaTypes('vnd.openeye.oeb', 'application/vnd.openeye.oeb');
		self::$AppVndOpenxmlformatsOfficedocumentCustomPropertiesXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.custom-properties+xml', 'application/vnd.openxmlformats-officedocument.custom-properties+xml');
		self::$AppVndOpenxmlformatsOfficedocumentCustomxmlpropertiesXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.customXmlProperties+xml', 'application/vnd.openxmlformats-officedocument.customXmlProperties+xml');
		self::$AppVndOpenxmlformatsOfficedocumentDrawingXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.drawing+xml', 'application/vnd.openxmlformats-officedocument.drawing+xml');
		self::$AppVndOpenxmlformatsOfficedocumentDrawingmlChartXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.drawingml.chart+xml', 'application/vnd.openxmlformats-officedocument.drawingml.chart+xml');
		self::$AppVndOpenxmlformatsOfficedocumentDrawingmlChartshapesXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.drawingml.chartshapes+xml', 'application/vnd.openxmlformats-officedocument.drawingml.chartshapes+xml');
		self::$AppVndOpenxmlformatsOfficedocumentDrawingmlDiagramcolorsXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.drawingml.diagramColors+xml', 'application/vnd.openxmlformats-officedocument.drawingml.diagramColors+xml');
		self::$AppVndOpenxmlformatsOfficedocumentDrawingmlDiagramdataXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.drawingml.diagramData+xml', 'application/vnd.openxmlformats-officedocument.drawingml.diagramData+xml');
		self::$AppVndOpenxmlformatsOfficedocumentDrawingmlDiagramlayoutXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.drawingml.diagramLayout+xml', 'application/vnd.openxmlformats-officedocument.drawingml.diagramLayout+xml');
		self::$AppVndOpenxmlformatsOfficedocumentDrawingmlDiagramstyleXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.drawingml.diagramStyle+xml', 'application/vnd.openxmlformats-officedocument.drawingml.diagramStyle+xml');
		self::$AppVndOpenxmlformatsOfficedocumentExtendedPropertiesXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.extended-properties+xml', 'application/vnd.openxmlformats-officedocument.extended-properties+xml');
		self::$AppVndOpenxmlformatsOfficedocumentPresentationmlCommentauthorsXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.presentationml.commentAuthors+xml', 'application/vnd.openxmlformats-officedocument.presentationml.commentAuthors+xml');
		self::$AppVndOpenxmlformatsOfficedocumentPresentationmlCommentsXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.presentationml.comments+xml', 'application/vnd.openxmlformats-officedocument.presentationml.comments+xml');
		self::$AppVndOpenxmlformatsOfficedocumentPresentationmlHandoutmasterXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.presentationml.handoutMaster+xml', 'application/vnd.openxmlformats-officedocument.presentationml.handoutMaster+xml');
		self::$AppVndOpenxmlformatsOfficedocumentPresentationmlNotesmasterXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.presentationml.notesMaster+xml', 'application/vnd.openxmlformats-officedocument.presentationml.notesMaster+xml');
		self::$AppVndOpenxmlformatsOfficedocumentPresentationmlNotesslideXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.presentationml.notesSlide+xml', 'application/vnd.openxmlformats-officedocument.presentationml.notesSlide+xml');
		self::$AppVndOpenxmlformatsOfficedocumentPresentationmlPresentation = new IANAMediaTypes('vnd.openxmlformats-officedocument.presentationml.presentation', 'application/vnd.openxmlformats-officedocument.presentationml.presentation');
		self::$AppVndOpenxmlformatsOfficedocumentPresentationmlPresentationMainXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.presentationml.presentation.main+xml', 'application/vnd.openxmlformats-officedocument.presentationml.presentation.main+xml');
		self::$AppVndOpenxmlformatsOfficedocumentPresentationmlPrespropsXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.presentationml.presProps+xml', 'application/vnd.openxmlformats-officedocument.presentationml.presProps+xml');
		self::$AppVndOpenxmlformatsOfficedocumentPresentationmlSlide = new IANAMediaTypes('vnd.openxmlformats-officedocument.presentationml.slide', 'application/vnd.openxmlformats-officedocument.presentationml.slide');
		self::$AppVndOpenxmlformatsOfficedocumentPresentationmlSlideXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.presentationml.slide+xml', 'application/vnd.openxmlformats-officedocument.presentationml.slide+xml');
		self::$AppVndOpenxmlformatsOfficedocumentPresentationmlSlidelayoutXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.presentationml.slideLayout+xml', 'application/vnd.openxmlformats-officedocument.presentationml.slideLayout+xml');
		self::$AppVndOpenxmlformatsOfficedocumentPresentationmlSlidemasterXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.presentationml.slideMaster+xml', 'application/vnd.openxmlformats-officedocument.presentationml.slideMaster+xml');
		self::$AppVndOpenxmlformatsOfficedocumentPresentationmlSlideshow = new IANAMediaTypes('vnd.openxmlformats-officedocument.presentationml.slideshow', 'application/vnd.openxmlformats-officedocument.presentationml.slideshow');
		self::$AppVndOpenxmlformatsOfficedocumentPresentationmlSlideshowMainXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.presentationml.slideshow.main+xml', 'application/vnd.openxmlformats-officedocument.presentationml.slideshow.main+xml');
		self::$AppVndOpenxmlformatsOfficedocumentPresentationmlSlideupdateinfoXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.presentationml.slideUpdateInfo+xml', 'application/vnd.openxmlformats-officedocument.presentationml.slideUpdateInfo+xml');
		self::$AppVndOpenxmlformatsOfficedocumentPresentationmlTablestylesXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.presentationml.tableStyles+xml', 'application/vnd.openxmlformats-officedocument.presentationml.tableStyles+xml');
		self::$AppVndOpenxmlformatsOfficedocumentPresentationmlTagsXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.presentationml.tags+xml', 'application/vnd.openxmlformats-officedocument.presentationml.tags+xml');
		self::$AppVndOpenxmlformatsOfficedocumentPresentationmlTemplate = new IANAMediaTypes('vnd.openxmlformats-officedocument.presentationml.template', 'application/vnd.openxmlformats-officedocument.presentationml-template');
		self::$AppVndOpenxmlformatsOfficedocumentPresentationmlTemplateMainXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.presentationml.template.main+xml', 'application/vnd.openxmlformats-officedocument.presentationml.template.main+xml');
		self::$AppVndOpenxmlformatsOfficedocumentPresentationmlViewpropsXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.presentationml.viewProps+xml', 'application/vnd.openxmlformats-officedocument.presentationml.viewProps+xml');
		self::$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlCalcchainXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.spreadsheetml.calcChain+xml', 'application/vnd.openxmlformats-officedocument.spreadsheetml.calcChain+xml');
		self::$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlChartsheetXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.spreadsheetml.chartsheet+xml', 'application/vnd.openxmlformats-officedocument.spreadsheetml.chartsheet+xml');
		self::$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlCommentsXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.spreadsheetml.comments+xml', 'application/vnd.openxmlformats-officedocument.spreadsheetml.comments+xml');
		self::$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlConnectionsXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.spreadsheetml.connections+xml', 'application/vnd.openxmlformats-officedocument.spreadsheetml.connections+xml');
		self::$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlDialogsheetXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.spreadsheetml.dialogsheet+xml', 'application/vnd.openxmlformats-officedocument.spreadsheetml.dialogsheet+xml');
		self::$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlExternallinkXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.spreadsheetml.externalLink+xml', 'application/vnd.openxmlformats-officedocument.spreadsheetml.externalLink+xml');
		self::$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlPivotcachedefinitionXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.spreadsheetml.pivotCacheDefinition+xml', 'application/vnd.openxmlformats-officedocument.spreadsheetml.pivotCacheDefinition+xml');
		self::$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlPivotcacherecordsXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.spreadsheetml.pivotCacheRecords+xml', 'application/vnd.openxmlformats-officedocument.spreadsheetml.pivotCacheRecords+xml');
		self::$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlPivottableXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.spreadsheetml.pivotTable+xml', 'application/vnd.openxmlformats-officedocument.spreadsheetml.pivotTable+xml');
		self::$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlQuerytableXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.spreadsheetml.queryTable+xml', 'application/vnd.openxmlformats-officedocument.spreadsheetml.queryTable+xml');
		self::$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlRevisionheadersXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.spreadsheetml.revisionHeaders+xml', 'application/vnd.openxmlformats-officedocument.spreadsheetml.revisionHeaders+xml');
		self::$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlRevisionlogXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.spreadsheetml.revisionLog+xml', 'application/vnd.openxmlformats-officedocument.spreadsheetml.revisionLog+xml');
		self::$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlSharedstringsXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.spreadsheetml.sharedStrings+xml', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sharedStrings+xml');
		self::$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlSheet = new IANAMediaTypes('vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		self::$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlSheetMainXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.spreadsheetml.sheet.main+xml', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet.main+xml');
		self::$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlSheetmetadataXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.spreadsheetml.sheetMetadata+xml', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheetMetadata+xml');
		self::$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlStylesXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.spreadsheetml.styles+xml', 'application/vnd.openxmlformats-officedocument.spreadsheetml.styles+xml');
		self::$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlTableXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.spreadsheetml.table+xml', 'application/vnd.openxmlformats-officedocument.spreadsheetml.table+xml');
		self::$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlTablesinglecellsXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.spreadsheetml.tableSingleCells+xml', 'application/vnd.openxmlformats-officedocument.spreadsheetml.tableSingleCells+xml');
		self::$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlTemplate = new IANAMediaTypes('vnd.openxmlformats-officedocument.spreadsheetml.template', 'application/vnd.openxmlformats-officedocument.spreadsheetml-template');
		self::$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlTemplateMainXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.spreadsheetml.template.main+xml', 'application/vnd.openxmlformats-officedocument.spreadsheetml.template.main+xml');
		self::$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlUsernamesXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.spreadsheetml.userNames+xml', 'application/vnd.openxmlformats-officedocument.spreadsheetml.userNames+xml');
		self::$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlVolatiledependenciesXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.spreadsheetml.volatileDependencies+xml', 'application/vnd.openxmlformats-officedocument.spreadsheetml.volatileDependencies+xml');
		self::$AppVndOpenxmlformatsOfficedocumentSpreadsheetmlWorksheetXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.spreadsheetml.worksheet+xml', 'application/vnd.openxmlformats-officedocument.spreadsheetml.worksheet+xml');
		self::$AppVndOpenxmlformatsOfficedocumentThemeXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.theme+xml', 'application/vnd.openxmlformats-officedocument.theme+xml');
		self::$AppVndOpenxmlformatsOfficedocumentThemeoverrideXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.themeOverride+xml', 'application/vnd.openxmlformats-officedocument.themeOverride+xml');
		self::$AppVndOpenxmlformatsOfficedocumentVmldrawing = new IANAMediaTypes('vnd.openxmlformats-officedocument.vmlDrawing', 'application/vnd.openxmlformats-officedocument.vmlDrawing');
		self::$AppVndOpenxmlformatsOfficedocumentWordprocessingmlCommentsXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.wordprocessingml.comments+xml', 'application/vnd.openxmlformats-officedocument.wordprocessingml.comments+xml');
		self::$AppVndOpenxmlformatsOfficedocumentWordprocessingmlDocument = new IANAMediaTypes('vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
		self::$AppVndOpenxmlformatsOfficedocumentWordprocessingmlDocumentGlossaryXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.wordprocessingml.document.glossary+xml', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document.glossary+xml');
		self::$AppVndOpenxmlformatsOfficedocumentWordprocessingmlDocumentMainXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.wordprocessingml.document.main+xml', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document.main+xml');
		self::$AppVndOpenxmlformatsOfficedocumentWordprocessingmlEndnotesXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.wordprocessingml.endnotes+xml', 'application/vnd.openxmlformats-officedocument.wordprocessingml.endnotes+xml');
		self::$AppVndOpenxmlformatsOfficedocumentWordprocessingmlFonttableXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.wordprocessingml.fontTable+xml', 'application/vnd.openxmlformats-officedocument.wordprocessingml.fontTable+xml');
		self::$AppVndOpenxmlformatsOfficedocumentWordprocessingmlFooterXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.wordprocessingml.footer+xml', 'application/vnd.openxmlformats-officedocument.wordprocessingml.footer+xml');
		self::$AppVndOpenxmlformatsOfficedocumentWordprocessingmlFootnotesXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.wordprocessingml.footnotes+xml', 'application/vnd.openxmlformats-officedocument.wordprocessingml.footnotes+xml');
		self::$AppVndOpenxmlformatsOfficedocumentWordprocessingmlNumberingXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.wordprocessingml.numbering+xml', 'application/vnd.openxmlformats-officedocument.wordprocessingml.numbering+xml');
		self::$AppVndOpenxmlformatsOfficedocumentWordprocessingmlSettingsXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.wordprocessingml.settings+xml', 'application/vnd.openxmlformats-officedocument.wordprocessingml.settings+xml');
		self::$AppVndOpenxmlformatsOfficedocumentWordprocessingmlStylesXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.wordprocessingml.styles+xml', 'application/vnd.openxmlformats-officedocument.wordprocessingml.styles+xml');
		self::$AppVndOpenxmlformatsOfficedocumentWordprocessingmlTemplate = new IANAMediaTypes('vnd.openxmlformats-officedocument.wordprocessingml.template', 'application/vnd.openxmlformats-officedocument.wordprocessingml-template');
		self::$AppVndOpenxmlformatsOfficedocumentWordprocessingmlTemplateMainXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.wordprocessingml.template.main+xml', 'application/vnd.openxmlformats-officedocument.wordprocessingml.template.main+xml');
		self::$AppVndOpenxmlformatsOfficedocumentWordprocessingmlWebsettingsXml = new IANAMediaTypes('vnd.openxmlformats-officedocument.wordprocessingml.webSettings+xml', 'application/vnd.openxmlformats-officedocument.wordprocessingml.webSettings+xml');
		self::$AppVndOpenxmlformatsPackageCorePropertiesXml = new IANAMediaTypes('vnd.openxmlformats-package.core-properties+xml', 'application/vnd.openxmlformats-package.core-properties+xml');
		self::$AppVndOpenxmlformatsPackageDigitalSignatureXmlsignatureXml = new IANAMediaTypes('vnd.openxmlformats-package.digital-signature-xmlsignature+xml', 'application/vnd.openxmlformats-package.digital-signature-xmlsignature+xml');
		self::$AppVndOpenxmlformatsPackageRelationshipsXml = new IANAMediaTypes('vnd.openxmlformats-package.relationships+xml', 'application/vnd.openxmlformats-package.relationships+xml');
		self::$AppVndOracleResourceJson = new IANAMediaTypes('vnd.oracle.resource+json', 'application/vnd.oracle.resource+json');
		self::$AppVndOrangeIndata = new IANAMediaTypes('vnd.orange.indata', 'application/vnd.orange.indata');
		self::$AppVndOsaNetdeploy = new IANAMediaTypes('vnd.osa.netdeploy', 'application/vnd.osa.netdeploy');
		self::$AppVndOsgeoMapguidePackage = new IANAMediaTypes('vnd.osgeo.mapguide.package', 'application/vnd.osgeo.mapguide.package');
		self::$AppVndOsgiBundle = new IANAMediaTypes('vnd.osgi.bundle', 'application/vnd.osgi.bundle');
		self::$AppVndOsgiDp = new IANAMediaTypes('vnd.osgi.dp', 'application/vnd.osgi.dp');
		self::$AppVndOsgiSubsystem = new IANAMediaTypes('vnd.osgi.subsystem', 'application/vnd.osgi.subsystem');
		self::$AppVndOtpsCtKipXml = new IANAMediaTypes('vnd.otps.ct-kip+xml', 'application/vnd.otps.ct-kip+xml');
		self::$AppVndPalm = new IANAMediaTypes('vnd.palm', 'application/vnd.palm');
		self::$AppVndPanoply = new IANAMediaTypes('vnd.panoply', 'application/vnd.panoply');
		self::$AppVndPaosXml = new IANAMediaTypes('vnd.paos.xml', 'application/vnd.paos+xml');
		self::$AppVndPawaafile = new IANAMediaTypes('vnd.pawaafile', 'application/vnd.pawaafile');
		self::$AppVndPcos = new IANAMediaTypes('vnd.pcos', 'application/vnd.pcos');
		self::$AppVndPgFormat = new IANAMediaTypes('vnd.pg.format', 'application/vnd.pg.format');
		self::$AppVndPgOsasli = new IANAMediaTypes('vnd.pg.osasli', 'application/vnd.pg.osasli');
		self::$AppVndPiaccessApplicationLicence = new IANAMediaTypes('vnd.piaccess.application-licence', 'application/vnd.piaccess.application-licence');
		self::$AppVndPicsel = new IANAMediaTypes('vnd.picsel', 'application/vnd.picsel');
		self::$AppVndPmiWidget = new IANAMediaTypes('vnd.pmi.widget', 'application/vnd.pmi.widget');
		self::$AppVndPocGroupAdvertisementXml = new IANAMediaTypes('vnd.poc.group-advertisement+xml', 'application/vnd.poc.group-advertisement+xml');
		self::$AppVndPocketlearn = new IANAMediaTypes('vnd.pocketlearn', 'application/vnd.pocketlearn');
		self::$AppVndPowerbuilder6 = new IANAMediaTypes('vnd.powerbuilder6', 'application/vnd.powerbuilder6');
		self::$AppVndPowerbuilder6S = new IANAMediaTypes('vnd.powerbuilder6-s', 'application/vnd.powerbuilder6-s');
		self::$AppVndPowerbuilder7 = new IANAMediaTypes('vnd.powerbuilder7', 'application/vnd.powerbuilder7');
		self::$AppVndPowerbuilder75 = new IANAMediaTypes('vnd.powerbuilder75', 'application/vnd.powerbuilder75');
		self::$AppVndPowerbuilder75S = new IANAMediaTypes('vnd.powerbuilder75-s', 'application/vnd.powerbuilder75-s');
		self::$AppVndPowerbuilder7S = new IANAMediaTypes('vnd.powerbuilder7-s', 'application/vnd.powerbuilder7-s');
		self::$AppVndPreminet = new IANAMediaTypes('vnd.preminet', 'application/vnd.preminet');
		self::$AppVndPreviewsystemsBox = new IANAMediaTypes('vnd.previewsystems.box', 'application/vnd.previewsystems.box');
		self::$AppVndProteusMagazine = new IANAMediaTypes('vnd.proteus.magazine', 'application/vnd.proteus.magazine');
		self::$AppVndPublishareDeltaTree = new IANAMediaTypes('vnd.publishare-delta-tree', 'application/vnd.publishare-delta-tree');
		self::$AppVndPviPtid1 = new IANAMediaTypes('vnd.pvi.ptid1', 'application/vnd.pvi.ptid1');
		self::$AppVndPwgMultiplexed = new IANAMediaTypes('vnd.pwg-multiplexed', 'application/vnd.pwg-multiplexed');
		self::$AppVndPwgXhtmlPrintXml = new IANAMediaTypes('vnd.pwg-xhtml-print+xml', 'application/vnd.pwg-xhtml-print+xml');
		self::$AppVndQualcommBrewAppRes = new IANAMediaTypes('vnd.qualcomm.brew-app-res', 'application/vnd.qualcomm.brew-app-res');
		self::$AppVndQuarkQuarkxpress = new IANAMediaTypes('vnd.Quark.QuarkXPress', 'application/vnd.Quark.QuarkXPress');
		self::$AppVndQuobjectQuoxdocument = new IANAMediaTypes('vnd.quobject-quoxdocument', 'application/vnd.quobject-quoxdocument');
		self::$AppVndRadisysMomlXml = new IANAMediaTypes('vnd.radisys.moml+xml', 'application/vnd.radisys.moml+xml');
		self::$AppVndRadisysMsmlAuditConfXml = new IANAMediaTypes('vnd.radisys.msml-audit-conf+xml', 'application/vnd.radisys.msml-audit-conf+xml');
		self::$AppVndRadisysMsmlAuditConnXml = new IANAMediaTypes('vnd.radisys.msml-audit-conn+xml', 'application/vnd.radisys.msml-audit-conn+xml');
		self::$AppVndRadisysMsmlAuditDialogXml = new IANAMediaTypes('vnd.radisys.msml-audit-dialog+xml', 'application/vnd.radisys.msml-audit-dialog+xml');
		self::$AppVndRadisysMsmlAuditStreamXml = new IANAMediaTypes('vnd.radisys.msml-audit-stream+xml', 'application/vnd.radisys.msml-audit-stream+xml');
		self::$AppVndRadisysMsmlAuditXml = new IANAMediaTypes('vnd.radisys.msml-audit+xml', 'application/vnd.radisys.msml-audit+xml');
		self::$AppVndRadisysMsmlConfXml = new IANAMediaTypes('vnd.radisys.msml-conf+xml', 'application/vnd.radisys.msml-conf+xml');
		self::$AppVndRadisysMsmlDialogBaseXml = new IANAMediaTypes('vnd.radisys.msml-dialog-base+xml', 'application/vnd.radisys.msml-dialog-base+xml');
		self::$AppVndRadisysMsmlDialogFaxDetectXml = new IANAMediaTypes('vnd.radisys.msml-dialog-fax-detect+xml', 'application/vnd.radisys.msml-dialog-fax-detect+xml');
		self::$AppVndRadisysMsmlDialogFaxSendrecvXml = new IANAMediaTypes('vnd.radisys.msml-dialog-fax-sendrecv+xml', 'application/vnd.radisys.msml-dialog-fax-sendrecv+xml');
		self::$AppVndRadisysMsmlDialogGroupXml = new IANAMediaTypes('vnd.radisys.msml-dialog-group+xml', 'application/vnd.radisys.msml-dialog-group+xml');
		self::$AppVndRadisysMsmlDialogSpeechXml = new IANAMediaTypes('vnd.radisys.msml-dialog-speech+xml', 'application/vnd.radisys.msml-dialog-speech+xml');
		self::$AppVndRadisysMsmlDialogTransformXml = new IANAMediaTypes('vnd.radisys.msml-dialog-transform+xml', 'application/vnd.radisys.msml-dialog-transform+xml');
		self::$AppVndRadisysMsmlDialogXml = new IANAMediaTypes('vnd.radisys.msml-dialog+xml', 'application/vnd.radisys.msml-dialog+xml');
		self::$AppVndRadisysMsmlXml = new IANAMediaTypes('vnd.radisys.msml+xml', 'application/vnd.radisys.msml+xml');
		self::$AppVndRainstorData = new IANAMediaTypes('vnd.rainstor.data', 'application/vnd.rainstor.data');
		self::$AppVndRapid = new IANAMediaTypes('vnd.rapid', 'application/vnd.rapid');
		self::$AppVndRealvncBed = new IANAMediaTypes('vnd.realvnc.bed', 'application/vnd.realvnc.bed');
		self::$AppVndRecordareMusicxml = new IANAMediaTypes('vnd.recordare.musicxml', 'application/vnd.recordare.musicxml');
		self::$AppVndRecordareMusicxmlXml = new IANAMediaTypes('vnd.recordare.musicxml+xml', 'application/vnd.recordare.musicxml+xml');
		self::$AppVndRenlearnRlprint = new IANAMediaTypes('vnd.RenLearn.rlprint', 'application/vnd.renlearn.rlprint');
		self::$AppVndRigCryptonote = new IANAMediaTypes('vnd.rig.cryptonote', 'application/vnd.rig.cryptonote');
		self::$AppVndRoute66Link66Xml = new IANAMediaTypes('vnd.route66.link66+xml', 'application/vnd.route66.link66+xml');
		self::$AppVndRs274X = new IANAMediaTypes('vnd.rs-274x', 'application/vnd.rs-274x');
		self::$AppVndRuckusDownload = new IANAMediaTypes('vnd.ruckus.download', 'application/vnd.ruckus.download');
		self::$AppVndS3Sms = new IANAMediaTypes('vnd.s3sms', 'application/vnd.s3sms');
		self::$AppVndSailingtrackerTrack = new IANAMediaTypes('vnd.sailingtracker.track', 'application/vnd.sailingtracker.track');
		self::$AppVndSbmCid = new IANAMediaTypes('vnd.sbm.cid', 'application/vnd.sbm.cid');
		self::$AppVndSbmMid2 = new IANAMediaTypes('vnd.sbm.mid2', 'application/vnd.sbm.mid2');
		self::$AppVndScribus = new IANAMediaTypes('vnd.scribus', 'application/vnd.scribus');
		self::$AppVndSealed3Df = new IANAMediaTypes('vnd.sealed.3df', 'application/vnd.sealed.3df');
		self::$AppVndSealedCsf = new IANAMediaTypes('vnd.sealed.csf', 'application/vnd.sealed.csf');
		self::$AppVndSealedDoc = new IANAMediaTypes('vnd.sealed.doc', 'application/vnd.sealed-doc');
		self::$AppVndSealedEml = new IANAMediaTypes('vnd.sealed.eml', 'application/vnd.sealed-eml');
		self::$AppVndSealedMht = new IANAMediaTypes('vnd.sealed.mht', 'application/vnd.sealed-mht');
		self::$AppVndSealedNet = new IANAMediaTypes('vnd.sealed.net', 'application/vnd.sealed.net');
		self::$AppVndSealedPpt = new IANAMediaTypes('vnd.sealed.ppt', 'application/vnd.sealed-ppt');
		self::$AppVndSealedTiff = new IANAMediaTypes('vnd.sealed.tiff', 'application/vnd.sealed-tiff');
		self::$AppVndSealedXls = new IANAMediaTypes('vnd.sealed.xls', 'application/vnd.sealed-xls');
		self::$AppVndSealedmediaSoftsealHtml = new IANAMediaTypes('vnd.sealedmedia.softseal.html', 'application/vnd.sealedmedia.softseal-html');
		self::$AppVndSealedmediaSoftsealPdf = new IANAMediaTypes('vnd.sealedmedia.softseal.pdf', 'application/vnd.sealedmedia.softseal-pdf');
		self::$AppVndSeemail = new IANAMediaTypes('vnd.seemail', 'application/vnd.seemail');
		self::$AppVndSema = new IANAMediaTypes('vnd.sema', 'application/vnd-sema');
		self::$AppVndSemd = new IANAMediaTypes('vnd.semd', 'application/vnd.semd');
		self::$AppVndSemf = new IANAMediaTypes('vnd.semf', 'application/vnd.semf');
		self::$AppVndShanaInformedFormdata = new IANAMediaTypes('vnd.shana.informed.formdata', 'application/vnd.shana.informed.formdata');
		self::$AppVndShanaInformedFormtemplate = new IANAMediaTypes('vnd.shana.informed.formtemplate', 'application/vnd.shana.informed.formtemplate');
		self::$AppVndShanaInformedInterchange = new IANAMediaTypes('vnd.shana.informed.interchange', 'application/vnd.shana.informed.interchange');
		self::$AppVndShanaInformedPackage = new IANAMediaTypes('vnd.shana.informed.package', 'application/vnd.shana.informed.package');
		self::$AppVndSimtechMindmapper = new IANAMediaTypes('vnd.SimTech-MindMapper', 'application/vnd.SimTech-MindMapper');
		self::$AppVndSirenJson = new IANAMediaTypes('vnd.siren+json', 'application/vnd.siren+json');
		self::$AppVndSmaf = new IANAMediaTypes('vnd.smaf', 'application/vnd.smaf');
		self::$AppVndSmartNotebook = new IANAMediaTypes('vnd.smart.notebook', 'application/vnd.smart.notebook');
		self::$AppVndSmartTeacher = new IANAMediaTypes('vnd.smart.teacher', 'application/vnd.smart.teacher');
		self::$AppVndSoftware602FillerFormXml = new IANAMediaTypes('vnd.software602.filler.form+xml', 'application/vnd.software602.filler.form+xml');
		self::$AppVndSoftware602FillerFormXmlZip = new IANAMediaTypes('vnd.software602.filler.form-xml-zip', 'application/vnd.software602.filler.form-xml-zip');
		self::$AppVndSolentSdkmXml = new IANAMediaTypes('vnd.solent.sdkm+xml', 'application/vnd.solent.sdkm+xml');
		self::$AppVndSpotfireDxp = new IANAMediaTypes('vnd.spotfire.dxp', 'application/vnd.spotfire.dxp');
		self::$AppVndSpotfireSfs = new IANAMediaTypes('vnd.spotfire.sfs', 'application/vnd.spotfire.sfs');
		self::$AppVndSssCod = new IANAMediaTypes('vnd.sss-cod', 'application/vnd.sss-cod');
		self::$AppVndSssDtf = new IANAMediaTypes('vnd.sss-dtf', 'application/vnd.sss-dtf');
		self::$AppVndSssNtf = new IANAMediaTypes('vnd.sss-ntf', 'application/vnd.sss-ntf');
		self::$AppVndStepmaniaPackage = new IANAMediaTypes('vnd.stepmania.package', 'application/vnd.stepmania.package');
		self::$AppVndStepmaniaStepchart = new IANAMediaTypes('vnd.stepmania.stepchart', 'application/vnd.stepmania.stepchart');
		self::$AppVndStreetStream = new IANAMediaTypes('vnd.street-stream', 'application/vnd.street-stream');
		self::$AppVndSunWadlXml = new IANAMediaTypes('vnd.sun.wadl+xml', 'application/vnd.sun.wadl+xml');
		self::$AppVndSusCalendar = new IANAMediaTypes('vnd.sus-calendar', 'application/vnd.sus-calendar');
		self::$AppVndSvd = new IANAMediaTypes('vnd.svd', 'application/vnd.svd');
		self::$AppVndSwiftviewIcs = new IANAMediaTypes('vnd.swiftview-ics', 'application/vnd.swiftview-ics');
		self::$AppVndSyncmlDmNotification = new IANAMediaTypes('vnd.syncml.dm.notification', 'application/vnd.syncml.dm.notification');
		self::$AppVndSyncmlDmddfXml = new IANAMediaTypes('vnd.syncml.dmddf+xml', 'application/vnd.syncml.dmddf+xml');
		self::$AppVndSyncmlDmtndsWbxml = new IANAMediaTypes('vnd.syncml.dmtnds+wbxml', 'application/vnd.syncml.dmtnds+wbxml');
		self::$AppVndSyncmlDmtndsXml = new IANAMediaTypes('vnd.syncml.dmtnds+xml', 'application/vnd.syncml.dmtnds+xml');
		self::$AppVndSyncmlDmddfWbxml = new IANAMediaTypes('vnd.syncml.dmddf+wbxml', 'application/vnd.syncml.dmddf+wbxml');
		self::$AppVndSyncmlDmWbxml = new IANAMediaTypes('vnd.syncml.dm+wbxml', 'application/vnd.syncml.dm+wbxml');
		self::$AppVndSyncmlDmXml = new IANAMediaTypes('vnd.syncml.dm+xml', 'application/vnd.syncml.dm+xml');
		self::$AppVndSyncmlDsNotification = new IANAMediaTypes('vnd.syncml.ds.notification', 'application/vnd.syncml.ds.notification');
		self::$AppVndSyncmlXml = new IANAMediaTypes('vnd.syncml+xml', 'application/vnd.syncml+xml');
		self::$AppVndTaoIntentModuleArchive = new IANAMediaTypes('vnd.tao.intent-module-archive', 'application/vnd.tao.intent-module-archive');
		self::$AppVndTcpdumpPcap = new IANAMediaTypes('vnd.tcpdump.pcap', 'application/vnd.tcpdump.pcap');
		self::$AppVndTmdMediaflexApiXml = new IANAMediaTypes('vnd.tmd.mediaflex.api+xml', 'application/vnd.tmd.mediaflex.api+xml');
		self::$AppVndTmobileLivetv = new IANAMediaTypes('vnd.tmobile-livetv', 'application/vnd.tmobile-livetv');
		self::$AppVndTridTpt = new IANAMediaTypes('vnd.trid.tpt', 'application/vnd.trid.tpt');
		self::$AppVndTriscapeMxs = new IANAMediaTypes('vnd.triscape.mxs', 'application/vnd.triscape.mxs');
		self::$AppVndTrueapp = new IANAMediaTypes('vnd.trueapp', 'application/vnd.trueapp');
		self::$AppVndTruedoc = new IANAMediaTypes('vnd.truedoc', 'application/vnd.truedoc');
		self::$AppVndUbisoftWebplayer = new IANAMediaTypes('vnd.ubisoft.webplayer', 'application/vnd.ubisoft.webplayer');
		self::$AppVndUfdl = new IANAMediaTypes('vnd.ufdl', 'application/vnd.ufdl');
		self::$AppVndUiqTheme = new IANAMediaTypes('vnd.uiq.theme', 'application/vnd.uiq.theme');
		self::$AppVndUmajin = new IANAMediaTypes('vnd.umajin', 'application/vnd.umajin');
		self::$AppVndUnity = new IANAMediaTypes('vnd.unity', 'application/vnd.unity');
		self::$AppVndUomlXml = new IANAMediaTypes('vnd.uoml+xml', 'application/vnd.uoml+xml');
		self::$AppVndUplanetAlert = new IANAMediaTypes('vnd.uplanet.alert', 'application/vnd.uplanet.alert');
		self::$AppVndUplanetAlertWbxml = new IANAMediaTypes('vnd.uplanet.alert-wbxml', 'application/vnd.uplanet.alert-wbxml');
		self::$AppVndUplanetBearerChoice = new IANAMediaTypes('vnd.uplanet.bearer-choice', 'application/vnd.uplanet.bearer-choice');
		self::$AppVndUplanetBearerChoiceWbxml = new IANAMediaTypes('vnd.uplanet.bearer-choice-wbxml', 'application/vnd.uplanet.bearer-choice-wbxml');
		self::$AppVndUplanetCacheop = new IANAMediaTypes('vnd.uplanet.cacheop', 'application/vnd.uplanet.cacheop');
		self::$AppVndUplanetCacheopWbxml = new IANAMediaTypes('vnd.uplanet.cacheop-wbxml', 'application/vnd.uplanet.cacheop-wbxml');
		self::$AppVndUplanetChannel = new IANAMediaTypes('vnd.uplanet.channel', 'application/vnd.uplanet.channel');
		self::$AppVndUplanetChannelWbxml = new IANAMediaTypes('vnd.uplanet.channel-wbxml', 'application/vnd.uplanet.channel-wbxml');
		self::$AppVndUplanetList = new IANAMediaTypes('vnd.uplanet.list', 'application/vnd.uplanet.list');
		self::$AppVndUplanetListcmd = new IANAMediaTypes('vnd.uplanet.listcmd', 'application/vnd.uplanet.listcmd');
		self::$AppVndUplanetListcmdWbxml = new IANAMediaTypes('vnd.uplanet.listcmd-wbxml', 'application/vnd.uplanet.listcmd-wbxml');
		self::$AppVndUplanetListWbxml = new IANAMediaTypes('vnd.uplanet.list-wbxml', 'application/vnd.uplanet.list-wbxml');
		self::$AppVndUriMap = new IANAMediaTypes('vnd.uri-map', 'application/vnd.uri-map');
		self::$AppVndUplanetSignal = new IANAMediaTypes('vnd.uplanet.signal', 'application/vnd.uplanet.signal');
		self::$AppVndValveSourceMaterial = new IANAMediaTypes('vnd.valve.source.material', 'application/vnd.valve.source.material');
		self::$AppVndVcx = new IANAMediaTypes('vnd.vcx', 'application/vnd.vcx');
		self::$AppVndVdStudy = new IANAMediaTypes('vnd.vd-study', 'application/vnd.vd-study');
		self::$AppVndVectorworks = new IANAMediaTypes('vnd.vectorworks', 'application/vnd.vectorworks');
		self::$AppVndVerimatrixVcas = new IANAMediaTypes('vnd.verimatrix.vcas', 'application/vnd.verimatrix.vcas');
		self::$AppVndVidsoftVidconference = new IANAMediaTypes('vnd.vidsoft.vidconference', 'application/vnd.vidsoft.vidconference');
		self::$AppVndVisio = new IANAMediaTypes('vnd.visio', 'application/vnd.visio');
		self::$AppVndVisionary = new IANAMediaTypes('vnd.visionary', 'application/vnd.visionary');
		self::$AppVndVividenceScriptfile = new IANAMediaTypes('vnd.vividence.scriptfile', 'application/vnd.vividence.scriptfile');
		self::$AppVndVsf = new IANAMediaTypes('vnd.vsf', 'application/vnd.vsf');
		self::$AppVndWapSic = new IANAMediaTypes('vnd.wap.sic', 'application/vnd.wap.sic');
		self::$AppVndWapSlc = new IANAMediaTypes('vnd.wap.slc', 'application/vnd.wap-slc');
		self::$AppVndWapWbxml = new IANAMediaTypes('vnd.wap.wbxml', 'application/vnd.wap-wbxml');
		self::$AppVndWapWmlc = new IANAMediaTypes('vnd.wap.wmlc', 'application/vnd-wap-wmlc');
		self::$AppVndWapWmlscriptc = new IANAMediaTypes('vnd.wap.wmlscriptc', 'application/vnd.wap.wmlscriptc');
		self::$AppVndWebturbo = new IANAMediaTypes('vnd.webturbo', 'application/vnd.webturbo');
		self::$AppVndWfaP2P = new IANAMediaTypes('vnd.wfa.p2p', 'application/vnd.wfa.p2p');
		self::$AppVndWfaWsc = new IANAMediaTypes('vnd.wfa.wsc', 'application/vnd.wfa.wsc');
		self::$AppVndWindowsDevicepairing = new IANAMediaTypes('vnd.windows.devicepairing', 'application/vnd.windows.devicepairing');
		self::$AppVndWmc = new IANAMediaTypes('vnd.wmc', 'application/vnd.wmc');
		self::$AppVndWmfBootstrap = new IANAMediaTypes('vnd.wmf.bootstrap', 'application/vnd.wmf.bootstrap');
		self::$AppVndWolframMathematica = new IANAMediaTypes('vnd.wolfram.mathematica', 'application/vnd.wolfram.mathematica');
		self::$AppVndWolframMathematicaPackage = new IANAMediaTypes('vnd.wolfram.mathematica.package', 'application/vnd.wolfram.mathematica.package');
		self::$AppVndWolframPlayer = new IANAMediaTypes('vnd.wolfram.player', 'application/vnd.wolfram.player');
		self::$AppVndWordperfect = new IANAMediaTypes('vnd.wordperfect', 'application/vnd.wordperfect');
		self::$AppVndWqd = new IANAMediaTypes('vnd.wqd', 'application/vnd.wqd');
		self::$AppVndWrqHp3000Labelled = new IANAMediaTypes('vnd.wrq-hp3000-labelled', 'application/vnd.wrq-hp3000-labelled');
		self::$AppVndWtStf = new IANAMediaTypes('vnd.wt.stf', 'application/vnd.wt.stf');
		self::$AppVndWvCspXml = new IANAMediaTypes('vnd.wv.csp+xml', 'application/vnd.wv.csp+xml');
		self::$AppVndWvCspWbxml = new IANAMediaTypes('vnd.wv.csp+wbxml', 'application/vnd.wv.csp+wbxml');
		self::$AppVndWvSspXml = new IANAMediaTypes('vnd.wv.ssp+xml', 'application/vnd.wv.ssp+xml');
		self::$AppVndXacmlJson = new IANAMediaTypes('vnd.xacml+json', 'application/vnd.xacml+json');
		self::$AppVndXara = new IANAMediaTypes('vnd.xara', 'application/vnd.xara');
		self::$AppVndXfdl = new IANAMediaTypes('vnd.xfdl', 'application/vnd.xfdl');
		self::$AppVndXfdlWebform = new IANAMediaTypes('vnd.xfdl.webform', 'application/vnd.xfdl.webform');
		self::$AppVndXmiXml = new IANAMediaTypes('vnd.xmi+xml', 'application/vnd.xmi+xml');
		self::$AppVndXmpieCpkg = new IANAMediaTypes('vnd.xmpie.cpkg', 'application/vnd.xmpie.cpkg');
		self::$AppVndXmpieDpkg = new IANAMediaTypes('vnd.xmpie.dpkg', 'application/vnd.xmpie.dpkg');
		self::$AppVndXmpiePlan = new IANAMediaTypes('vnd.xmpie.plan', 'application/vnd.xmpie.plan');
		self::$AppVndXmpiePpkg = new IANAMediaTypes('vnd.xmpie.ppkg', 'application/vnd.xmpie.ppkg');
		self::$AppVndXmpieXlim = new IANAMediaTypes('vnd.xmpie.xlim', 'application/vnd.xmpie.xlim');
		self::$AppVndYamahaHvDic = new IANAMediaTypes('vnd.yamaha.hv-dic', 'application/vnd.yamaha.hv-dic');
		self::$AppVndYamahaHvScript = new IANAMediaTypes('vnd.yamaha.hv-script', 'application/vnd.yamaha.hv-script');
		self::$AppVndYamahaHvVoice = new IANAMediaTypes('vnd.yamaha.hv-voice', 'application/vnd.yamaha.hv-voice');
		self::$AppVndYamahaOpenscoreformatOsfpvgXml = new IANAMediaTypes('vnd.yamaha.openscoreformat.osfpvg+xml', 'application/vnd.yamaha.openscoreformat.osfpvg+xml');
		self::$AppVndYamahaOpenscoreformat = new IANAMediaTypes('vnd.yamaha.openscoreformat', 'application/vnd.yamaha.openscoreformat');
		self::$AppVndYamahaRemoteSetup = new IANAMediaTypes('vnd.yamaha.remote-setup', 'application/vnd.yamaha.remote-setup');
		self::$AppVndYamahaSmafAudio = new IANAMediaTypes('vnd.yamaha.smaf-audio', 'application/vnd.yamaha.smaf-audio');
		self::$AppVndYamahaSmafPhrase = new IANAMediaTypes('vnd.yamaha.smaf-phrase', 'application/vnd.yamaha.smaf-phrase');
		self::$AppVndYamahaThroughNgn = new IANAMediaTypes('vnd.yamaha.through-ngn', 'application/vnd.yamaha.through-ngn');
		self::$AppVndYamahaTunnelUdpencap = new IANAMediaTypes('vnd.yamaha.tunnel-udpencap', 'application/vnd.yamaha.tunnel-udpencap');
		self::$AppVndYaoweme = new IANAMediaTypes('vnd.yaoweme', 'application/vnd.yaoweme');
		self::$AppVndYellowriverCustomMenu = new IANAMediaTypes('vnd.yellowriver-custom-menu', 'application/vnd.yellowriver-custom-menu');
		self::$AppVndZul = new IANAMediaTypes('vnd.zul', 'application/vnd.zul');
		self::$AppVndZzazzDeckXml = new IANAMediaTypes('vnd.zzazz.deck+xml', 'application/vnd.zzazz.deck+xml');
		self::$AppVoicexmlXml = new IANAMediaTypes('voicexml+xml', 'application/voicexml+xml');
		self::$AppVqRtcpxr = new IANAMediaTypes('vq-rtcpxr', 'application/vq-rtcpxr');
		self::$AppWatcherinfoXml = new IANAMediaTypes('watcherinfo+xml', 'application/watcherinfo+xml');
		self::$AppWhoisppQuery = new IANAMediaTypes('whoispp-query', 'application/whoispp-query');
		self::$AppWhoisppResponse = new IANAMediaTypes('whoispp-response', 'application/whoispp-response');
		self::$AppWidget = new IANAMediaTypes('widget', '');
		self::$AppWita = new IANAMediaTypes('wita', 'application/wita');
		self::$AppWordperfect51 = new IANAMediaTypes('wordperfect5.1', 'application/wordperfect5.1');
		self::$AppWsdlXml = new IANAMediaTypes('wsdl+xml', 'application/wsdl+xml');
		self::$AppWspolicyXml = new IANAMediaTypes('wspolicy+xml', 'application/wspolicy+xml');
		self::$AppXWwwFormUrlencoded = new IANAMediaTypes('x-www-form-urlencoded', 'application/x-www-form-urlencoded');
		self::$AppX400Bp = new IANAMediaTypes('x400-bp', 'application/x400-bp');
		self::$AppXacmlXml = new IANAMediaTypes('xacml+xml', 'application/xacml+xml');
		self::$AppXcapAttXml = new IANAMediaTypes('xcap-att+xml', 'application/xcap-att+xml');
		self::$AppXcapCapsXml = new IANAMediaTypes('xcap-caps+xml', 'application/xcap-caps+xml');
		self::$AppXcapDiffXml = new IANAMediaTypes('xcap-diff+xml', 'application/xcap-diff+xml');
		self::$AppXcapElXml = new IANAMediaTypes('xcap-el+xml', 'application/xcap-el+xml');
		self::$AppXcapErrorXml = new IANAMediaTypes('xcap-error+xml', 'application/xcap-error+xml');
		self::$AppXcapNsXml = new IANAMediaTypes('xcap-ns+xml', 'application/xcap-ns+xml');
		self::$AppXconConferenceInfoDiffXml = new IANAMediaTypes('xcon-conference-info-diff+xml', 'application/xcon-conference-info-diff+xml');
		self::$AppXconConferenceInfoXml = new IANAMediaTypes('xcon-conference-info+xml', 'application/xcon-conference-info+xml');
		self::$AppXencXml = new IANAMediaTypes('xenc+xml', 'application/xenc+xml');
		self::$AppXhtmlXml = new IANAMediaTypes('xhtml+xml', 'application/xhtml+xml');
		self::$AppXml = new IANAMediaTypes('xml', 'application/xml');
		self::$AppXmlDtd = new IANAMediaTypes('xml-dtd', 'application/xml-dtd');
		self::$AppXmlExternalParsedEntity = new IANAMediaTypes('xml-external-parsed-entity', 'application/xml-external-parsed-entity');
		self::$AppXmlPatchXml = new IANAMediaTypes('xml-patch+xml', 'application/xml-patch+xml');
		self::$AppXmppXml = new IANAMediaTypes('xmpp+xml', 'application/xmpp+xml');
		self::$AppXopXml = new IANAMediaTypes('xop+xml', 'application/xop+xml');
		self::$AppXsltXml = new IANAMediaTypes('xslt+xml', '');
		self::$AppXvXml = new IANAMediaTypes('xv+xml', 'application/xv+xml');
		self::$AppYang = new IANAMediaTypes('yang', 'application/yang');
		self::$AppYinXml = new IANAMediaTypes('yin+xml', 'application/yin+xml');
		self::$AppZip = new IANAMediaTypes('zip', 'application/zip');
		self::$AppZlib = new IANAMediaTypes('zlib', 'application/zlib');
		self::$Audio = new IANAMediaTypes('Audio', '');
		self::$Aud1DInterleavedParityfec = new IANAMediaTypes('1d-interleaved-parityfec', 'audio/1d-interleaved-parityfec');
		self::$Aud32Kadpcm = new IANAMediaTypes('32kadpcm', 'audio/32kadpcm');
		self::$Aud3Gpp = new IANAMediaTypes('3gpp', 'audio/3gpp');
		self::$Aud3Gpp2 = new IANAMediaTypes('3gpp2', 'audio/3gpp2');
		self::$AudAc3 = new IANAMediaTypes('ac3', 'audio/ac3');
		self::$AudAmr = new IANAMediaTypes('AMR', 'audio/AMR');
		self::$AudAmrWb = new IANAMediaTypes('AMR-WB', 'audio/AMR-WB');
		self::$AudAmrWbPlus = new IANAMediaTypes('amr-wb+', 'audio/amr-wb+');
		self::$AudAptx = new IANAMediaTypes('aptx', 'audio/aptx');
		self::$AudAsc = new IANAMediaTypes('asc', 'audio/asc');
		self::$AudAtracAdvancedLossless = new IANAMediaTypes('ATRAC-ADVANCED-LOSSLESS', 'audio/ATRAC-ADVANCED-LOSSLESS');
		self::$AudAtracX = new IANAMediaTypes('ATRAC-X', 'audio/ATRAC-X');
		self::$AudAtrac3 = new IANAMediaTypes('ATRAC3', 'audio/ATRAC3');
		self::$AudBasic = new IANAMediaTypes('basic', 'audio/basic');
		self::$AudBv16 = new IANAMediaTypes('BV16', 'audio/BV16');
		self::$AudBv32 = new IANAMediaTypes('BV32', 'audio/BV32');
		self::$AudClearmode = new IANAMediaTypes('clearmode', 'audio/clearmode');
		self::$AudCn = new IANAMediaTypes('CN', 'audio/CN');
		self::$AudDat12 = new IANAMediaTypes('DAT12', 'audio/DAT12');
		self::$AudDls = new IANAMediaTypes('dls', 'audio/dls');
		self::$AudDsrEs201108 = new IANAMediaTypes('dsr-es201108', 'audio/dsr-es201108');
		self::$AudDsrEs202050 = new IANAMediaTypes('dsr-es202050', 'audio/dsr-es202050');
		self::$AudDsrEs202211 = new IANAMediaTypes('dsr-es202211', 'audio/dsr-es202211');
		self::$AudDsrEs202212 = new IANAMediaTypes('dsr-es202212', 'audio/dsr-es202212');
		self::$AudDv = new IANAMediaTypes('DV', 'audio/DV');
		self::$AudDvi4 = new IANAMediaTypes('DVI4', 'audio/DVI4');
		self::$AudEac3 = new IANAMediaTypes('eac3', 'audio/eac3');
		self::$AudEncaprtp = new IANAMediaTypes('encaprtp', 'audio/encaprtp');
		self::$AudEvrc = new IANAMediaTypes('EVRC', 'audio/EVRC');
		self::$AudEvrcQcp = new IANAMediaTypes('EVRC-QCP', 'audio/EVRC-QCP');
		self::$AudEvrc0 = new IANAMediaTypes('EVRC0', 'audio/EVRC0');
		self::$AudEvrc1 = new IANAMediaTypes('EVRC1', 'audio/EVRC1');
		self::$AudEvrcb = new IANAMediaTypes('EVRCB', 'audio/EVRCB');
		self::$AudEvrcb0 = new IANAMediaTypes('EVRCB0', 'audio/EVRCB0');
		self::$AudEvrcb1 = new IANAMediaTypes('EVRCB1', 'audio/EVRCB1');
		self::$AudEvrcnw = new IANAMediaTypes('EVRCNW', 'audio/EVRCNW');
		self::$AudEvrcnw0 = new IANAMediaTypes('EVRCNW0', 'audio/EVRCNW0');
		self::$AudEvrcnw1 = new IANAMediaTypes('EVRCNW1', 'audio/EVRCNW1');
		self::$AudEvrcwb = new IANAMediaTypes('EVRCWB', 'audio/EVRCWB');
		self::$AudEvrcwb0 = new IANAMediaTypes('EVRCWB0', 'audio/EVRCWB0');
		self::$AudEvrcwb1 = new IANAMediaTypes('EVRCWB1', 'audio/EVRCWB1');
		self::$AudExample = new IANAMediaTypes('example', 'audio/example');
		self::$AudFwdred = new IANAMediaTypes('fwdred', 'audio/fwdred');
		self::$AudG7110 = new IANAMediaTypes('G711-0', 'audio/G711-0');
		self::$AudG719 = new IANAMediaTypes('G719', 'audio/G719');
		self::$AudG7221 = new IANAMediaTypes('G7221', 'audio/G7221');
		self::$AudG722 = new IANAMediaTypes('G722', 'audio/G722');
		self::$AudG723 = new IANAMediaTypes('G723', 'audio/G723');
		self::$AudG72616 = new IANAMediaTypes('G726-16', 'audio/G726-16');
		self::$AudG72624 = new IANAMediaTypes('G726-24', 'audio/G726-24');
		self::$AudG72632 = new IANAMediaTypes('G726-32', 'audio/G726-32');
		self::$AudG72640 = new IANAMediaTypes('G726-40', 'audio/G726-40');
		self::$AudG728 = new IANAMediaTypes('G728', 'audio/G728');
		self::$AudG729 = new IANAMediaTypes('G729', 'audio/G729');
		self::$AudG7291 = new IANAMediaTypes('G7291', '');
		self::$AudG729D = new IANAMediaTypes('G729D', 'audio/G729D');
		self::$AudG729E = new IANAMediaTypes('G729E', 'audio/G729E');
		self::$AudGsm = new IANAMediaTypes('GSM', 'audio/GSM');
		self::$AudGsmEfr = new IANAMediaTypes('GSM-EFR', 'audio/GSM-EFR');
		self::$AudGsmHr08 = new IANAMediaTypes('GSM-HR-08', 'audio/GSM-HR-08');
		self::$AudIlbc = new IANAMediaTypes('iLBC', 'audio/iLBC');
		self::$AudIpMrV25 = new IANAMediaTypes('ip-mr_v2.5', 'audio/ip-mr_v2.5');
		self::$AudL8 = new IANAMediaTypes('L8', 'audio/L8');
		self::$AudL16 = new IANAMediaTypes('L16', 'audio/L16');
		self::$AudL20 = new IANAMediaTypes('L20', 'audio/L20');
		self::$AudL24 = new IANAMediaTypes('L24', 'audio/L24');
		self::$AudLpc = new IANAMediaTypes('LPC', 'audio/LPC');
		self::$AudMobileXmf = new IANAMediaTypes('mobile-xmf', 'audio/mobile-xmf');
		self::$AudMpa = new IANAMediaTypes('MPA', 'audio/MPA');
		self::$AudMp4 = new IANAMediaTypes('mp4', 'audio/mp4');
		self::$AudMp4ALatm = new IANAMediaTypes('MP4A-LATM', 'audio/MP4A-LATM');
		self::$AudMpaRobust = new IANAMediaTypes('mpa-robust', 'audio/mpa-robust');
		self::$AudMpeg = new IANAMediaTypes('mpeg', 'audio/mpeg');
		self::$AudMpeg4Generic = new IANAMediaTypes('mpeg4-generic', 'audio/mpeg4-generic');
		self::$AudOgg = new IANAMediaTypes('ogg', 'audio/ogg');
		self::$AudOpus = new IANAMediaTypes('opus', 'audio/opus');
		self::$AudParityfec = new IANAMediaTypes('parityfec', '');
		self::$AudPcma = new IANAMediaTypes('PCMA', 'audio/PCMA');
		self::$AudPcmaWb = new IANAMediaTypes('PCMA-WB', 'audio/PCMA-WB');
		self::$AudPcmu = new IANAMediaTypes('PCMU', 'audio/PCMU');
		self::$AudPcmuWb = new IANAMediaTypes('PCMU-WB', 'audio/PCMU-WB');
		self::$AudPrsSid = new IANAMediaTypes('prs.sid', 'audio/prs.sid');
		self::$AudQcelp = new IANAMediaTypes('QCELP', '');
		self::$AudRaptorfec = new IANAMediaTypes('raptorfec', 'audio/raptorfec');
		self::$AudRed = new IANAMediaTypes('RED', 'audio/RED');
		self::$AudRtpEncAescm128 = new IANAMediaTypes('rtp-enc-aescm128', 'audio/rtp-enc-aescm128');
		self::$AudRtploopback = new IANAMediaTypes('rtploopback', 'audio/rtploopback');
		self::$AudRtpMidi = new IANAMediaTypes('rtp-midi', 'audio/rtp-midi');
		self::$AudRtx = new IANAMediaTypes('rtx', 'audio/rtx');
		self::$AudSmv = new IANAMediaTypes('SMV', 'audio/SMV');
		self::$AudSmv0 = new IANAMediaTypes('SMV0', 'audio/SMV0');
		self::$AudSmvQcp = new IANAMediaTypes('SMV-QCP', 'audio/SMV-QCP');
		self::$AudSpMidi = new IANAMediaTypes('sp-midi', 'audio/sp-midi');
		self::$AudSpeex = new IANAMediaTypes('speex', 'audio/speex');
		self::$AudT140C = new IANAMediaTypes('t140c', 'audio/t140c');
		self::$AudT38 = new IANAMediaTypes('t38', 'audio/t38');
		self::$AudTelephoneEvent = new IANAMediaTypes('telephone-event', 'audio/telephone-event');
		self::$AudTone = new IANAMediaTypes('tone', 'audio/tone');
		self::$AudUemclip = new IANAMediaTypes('UEMCLIP', 'audio/UEMCLIP');
		self::$AudUlpfec = new IANAMediaTypes('ulpfec', 'audio/ulpfec');
		self::$AudVdvi = new IANAMediaTypes('VDVI', 'audio/VDVI');
		self::$AudVmrWb = new IANAMediaTypes('VMR-WB', 'audio/VMR-WB');
		self::$AudVnd3GppIufp = new IANAMediaTypes('vnd.3gpp.iufp', 'audio/vnd.3gpp.iufp');
		self::$AudVnd4Sb = new IANAMediaTypes('vnd.4SB', 'audio/vnd.4SB');
		self::$AudVndAudiokoz = new IANAMediaTypes('vnd.audiokoz', 'audio/vnd.audiokoz');
		self::$AudVndCelp = new IANAMediaTypes('vnd.CELP', 'audio/vnd.CELP');
		self::$AudVndCiscoNse = new IANAMediaTypes('vnd.cisco.nse', 'audio/vnd.cisco.nse');
		self::$AudVndCmlesRadioEvents = new IANAMediaTypes('vnd.cmles.radio-events', 'audio/vnd.cmles.radio-events');
		self::$AudVndCnsAnp1 = new IANAMediaTypes('vnd.cns.anp1', 'audio/vnd.cns.anp1');
		self::$AudVndCnsInf1 = new IANAMediaTypes('vnd.cns.inf1', 'audio/vnd.cns.inf1');
		self::$AudVndDeceAudio = new IANAMediaTypes('vnd.dece.audio', 'audio/vnd.dece.audio');
		self::$AudVndDigitalWinds = new IANAMediaTypes('vnd.digital-winds', 'audio/vnd.digital-winds');
		self::$AudVndDlnaAdts = new IANAMediaTypes('vnd.dlna.adts', 'audio/vnd.dlna.adts');
		self::$AudVndDolbyHeaac1 = new IANAMediaTypes('vnd.dolby.heaac.1', 'audio/vnd.dolby.heaac.1');
		self::$AudVndDolbyHeaac2 = new IANAMediaTypes('vnd.dolby.heaac.2', 'audio/vnd.dolby.heaac.2');
		self::$AudVndDolbyMlp = new IANAMediaTypes('vnd.dolby.mlp', 'audio/vnd.dolby.mlp');
		self::$AudVndDolbyMps = new IANAMediaTypes('vnd.dolby.mps', 'audio/vnd.dolby.mps');
		self::$AudVndDolbyPl2 = new IANAMediaTypes('vnd.dolby.pl2', 'audio/vnd.dolby.pl2');
		self::$AudVndDolbyPl2X = new IANAMediaTypes('vnd.dolby.pl2x', 'audio/vnd.dolby.pl2x');
		self::$AudVndDolbyPl2Z = new IANAMediaTypes('vnd.dolby.pl2z', 'audio/vnd.dolby.pl2z');
		self::$AudVndDolbyPulse1 = new IANAMediaTypes('vnd.dolby.pulse.1', 'audio/vnd.dolby.pulse.1');
		self::$AudVndDra = new IANAMediaTypes('vnd.dra', 'audio/vnd.dra');
		self::$AudVndDts = new IANAMediaTypes('vnd.dts', 'audio/vnd.dts');
		self::$AudVndDtsHd = new IANAMediaTypes('vnd.dts.hd', 'audio/vnd.dts.hd');
		self::$AudVndDvbFile = new IANAMediaTypes('vnd.dvb.file', 'audio/vnd.dvb.file');
		self::$AudVndEveradPlj = new IANAMediaTypes('vnd.everad.plj', 'audio/vnd.everad.plj');
		self::$AudVndHnsAudio = new IANAMediaTypes('vnd.hns.audio', 'audio/vnd.hns.audio');
		self::$AudVndLucentVoice = new IANAMediaTypes('vnd.lucent.voice', 'audio/vnd.lucent.voice');
		self::$AudVndMsPlayreadyMediaPya = new IANAMediaTypes('vnd.ms-playready.media.pya', 'audio/vnd.ms-playready.media.pya');
		self::$AudVndNokiaMobileXmf = new IANAMediaTypes('vnd.nokia.mobile-xmf', 'audio/vnd.nokia.mobile-xmf');
		self::$AudVndNortelVbk = new IANAMediaTypes('vnd.nortel.vbk', 'audio/vnd.nortel.vbk');
		self::$AudVndNueraEcelp4800 = new IANAMediaTypes('vnd.nuera.ecelp4800', 'audio/vnd.nuera.ecelp4800');
		self::$AudVndNueraEcelp7470 = new IANAMediaTypes('vnd.nuera.ecelp7470', 'audio/vnd.nuera.ecelp7470');
		self::$AudVndNueraEcelp9600 = new IANAMediaTypes('vnd.nuera.ecelp9600', 'audio/vnd.nuera.ecelp9600');
		self::$AudVndOctelSbc = new IANAMediaTypes('vnd.octel.sbc', 'audio/vnd.octel.sbc');
		self::$AudVndQcelpDeprecatedInFavorOfAudioQcelp = new IANAMediaTypes('vnd.qcelp - DEPRECATED in favor of audio/qcelp', 'audio/vnd.qcelp');
		self::$AudVndRhetorex32Kadpcm = new IANAMediaTypes('vnd.rhetorex.32kadpcm', 'audio/vnd.rhetorex.32kadpcm');
		self::$AudVndRip = new IANAMediaTypes('vnd.rip', 'audio/vnd.rip');
		self::$AudVndSealedmediaSoftsealMpeg = new IANAMediaTypes('vnd.sealedmedia.softseal.mpeg', 'audio/vnd.sealedmedia.softseal-mpeg');
		self::$AudVndVmxCvsd = new IANAMediaTypes('vnd.vmx.cvsd', 'audio/vnd.vmx.cvsd');
		self::$AudVorbis = new IANAMediaTypes('vorbis', 'audio/vorbis');
		self::$AudVorbisConfig = new IANAMediaTypes('vorbis-config', 'audio/vorbis-config');
		self::$Image = new IANAMediaTypes('Image', '');
		self::$ImgCgm = new IANAMediaTypes('cgm', 'image/cgm');
		self::$ImgExample = new IANAMediaTypes('example', 'image/example');
		self::$ImgFits = new IANAMediaTypes('fits', 'image/fits');
		self::$ImgG3Fax = new IANAMediaTypes('g3fax', 'image/g3fax');
		self::$ImgGif = new IANAMediaTypes('gif', '');
		self::$ImgIef = new IANAMediaTypes('ief', '');
		self::$ImgJp2 = new IANAMediaTypes('jp2', 'image/jp2');
		self::$ImgJpeg = new IANAMediaTypes('jpeg', '');
		self::$ImgJpm = new IANAMediaTypes('jpm', 'image/jpm');
		self::$ImgJpx = new IANAMediaTypes('jpx', 'image/jpx');
		self::$ImgKtx = new IANAMediaTypes('ktx', '');
		self::$ImgNaplps = new IANAMediaTypes('naplps', 'image/naplps');
		self::$ImgPng = new IANAMediaTypes('png', 'image/png');
		self::$ImgPrsBtif = new IANAMediaTypes('prs.btif', 'image/prs.btif');
		self::$ImgPrsPti = new IANAMediaTypes('prs.pti', 'image/prs.pti');
		self::$ImgPwgRaster = new IANAMediaTypes('pwg-raster', 'image/pwg-raster');
		self::$ImgSvgXml = new IANAMediaTypes('svg+xml', '');
		self::$ImgT38 = new IANAMediaTypes('t38', 'image/t38');
		self::$ImgTiff = new IANAMediaTypes('tiff', 'image/tiff');
		self::$ImgTiffFx = new IANAMediaTypes('tiff-fx', 'image/tiff-fx');
		self::$ImgVndAdobePhotoshop = new IANAMediaTypes('vnd.adobe.photoshop', 'image/vnd.adobe.photoshop');
		self::$ImgVndAirzipAcceleratorAzv = new IANAMediaTypes('vnd.airzip.accelerator.azv', 'image/vnd.airzip.accelerator.azv');
		self::$ImgVndCnsInf2 = new IANAMediaTypes('vnd.cns.inf2', 'image/vnd.cns.inf2');
		self::$ImgVndDeceGraphic = new IANAMediaTypes('vnd.dece.graphic', 'image/vnd.dece.graphic');
		self::$ImgVndDjvu = new IANAMediaTypes('vnd.djvu', 'image/vnd-djvu');
		self::$ImgVndDwg = new IANAMediaTypes('vnd.dwg', 'image/vnd.dwg');
		self::$ImgVndDxf = new IANAMediaTypes('vnd.dxf', 'image/vnd.dxf');
		self::$ImgVndDvbSubtitle = new IANAMediaTypes('vnd.dvb.subtitle', 'image/vnd.dvb.subtitle');
		self::$ImgVndFastbidsheet = new IANAMediaTypes('vnd.fastbidsheet', 'image/vnd.fastbidsheet');
		self::$ImgVndFpx = new IANAMediaTypes('vnd.fpx', 'image/vnd.fpx');
		self::$ImgVndFst = new IANAMediaTypes('vnd.fst', 'image/vnd.fst');
		self::$ImgVndFujixeroxEdmicsMmr = new IANAMediaTypes('vnd.fujixerox.edmics-mmr', 'image/vnd.fujixerox.edmics-mmr');
		self::$ImgVndFujixeroxEdmicsRlc = new IANAMediaTypes('vnd.fujixerox.edmics-rlc', 'image/vnd.fujixerox.edmics-rlc');
		self::$ImgVndGlobalgraphicsPgb = new IANAMediaTypes('vnd.globalgraphics.pgb', 'image/vnd.globalgraphics.pgb');
		self::$ImgVndMicrosoftIcon = new IANAMediaTypes('vnd.microsoft.icon', 'image/vnd.microsoft.icon');
		self::$ImgVndMix = new IANAMediaTypes('vnd.mix', 'image/vnd.mix');
		self::$ImgVndMsModi = new IANAMediaTypes('vnd.ms-modi', 'image/vnd.ms-modi');
		self::$ImgVndMozillaApng = new IANAMediaTypes('vnd.mozilla.apng', 'image/vnd.mozilla.apng');
		self::$ImgVndNetFpx = new IANAMediaTypes('vnd.net-fpx', 'image/vnd.net-fpx');
		self::$ImgVndRadiance = new IANAMediaTypes('vnd.radiance', 'image/vnd.radiance');
		self::$ImgVndSealedPng = new IANAMediaTypes('vnd.sealed.png', 'image/vnd.sealed-png');
		self::$ImgVndSealedmediaSoftsealGif = new IANAMediaTypes('vnd.sealedmedia.softseal.gif', 'image/vnd.sealedmedia.softseal-gif');
		self::$ImgVndSealedmediaSoftsealJpg = new IANAMediaTypes('vnd.sealedmedia.softseal.jpg', 'image/vnd.sealedmedia.softseal-jpg');
		self::$ImgVndSvf = new IANAMediaTypes('vnd.svf', 'image/vnd-svf');
		self::$ImgVndTencentTap = new IANAMediaTypes('vnd.tencent.tap', 'image/vnd.tencent.tap');
		self::$ImgVndValveSourceTexture = new IANAMediaTypes('vnd.valve.source.texture', 'image/vnd.valve.source.texture');
		self::$ImgVndWapWbmp = new IANAMediaTypes('vnd.wap.wbmp', 'image/vnd-wap-wbmp');
		self::$ImgVndXiff = new IANAMediaTypes('vnd.xiff', 'image/vnd.xiff');
		self::$ImgVndZbrushPcx = new IANAMediaTypes('vnd.zbrush.pcx', 'image/vnd.zbrush.pcx');
		self::$Message = new IANAMediaTypes('Message', '');
		self::$MsgCpim = new IANAMediaTypes('CPIM', 'message/CPIM');
		self::$MsgDeliveryStatus = new IANAMediaTypes('delivery-status', 'message/delivery-status');
		self::$MsgDispositionNotification = new IANAMediaTypes('disposition-notification', 'message/disposition-notification');
		self::$MsgExample = new IANAMediaTypes('example', 'message/example');
		self::$MsgExternalBody = new IANAMediaTypes('external-body', '');
		self::$MsgFeedbackReport = new IANAMediaTypes('feedback-report', 'message/feedback-report');
		self::$MsgGlobal = new IANAMediaTypes('global', 'message/global');
		self::$MsgGlobalDeliveryStatus = new IANAMediaTypes('global-delivery-status', 'message/global-delivery-status');
		self::$MsgGlobalDispositionNotification = new IANAMediaTypes('global-disposition-notification', 'message/global-disposition-notification');
		self::$MsgGlobalHeaders = new IANAMediaTypes('global-headers', 'message/global-headers');
		self::$MsgHttp = new IANAMediaTypes('http', 'message/http');
		self::$MsgImdnXml = new IANAMediaTypes('imdn+xml', 'message/imdn+xml');
		self::$MsgNewsObsoletedByRfc5537 = new IANAMediaTypes('news - OBSOLETED by RFC5537', 'message/news');
		self::$MsgPartial = new IANAMediaTypes('partial', '');
		self::$MsgRfc822 = new IANAMediaTypes('rfc822', '');
		self::$MsgSHttp = new IANAMediaTypes('s-http', 'message/s-http');
		self::$MsgSip = new IANAMediaTypes('sip', 'message/sip');
		self::$MsgSipfrag = new IANAMediaTypes('sipfrag', 'message/sipfrag');
		self::$MsgTrackingStatus = new IANAMediaTypes('tracking-status', 'message/tracking-status');
		self::$MsgVndSiSimpObsoletedByRequest = new IANAMediaTypes('vnd.si.simp - OBSOLETED by request', 'message/vnd.si.simp');
		self::$MsgVndWfaWsc = new IANAMediaTypes('vnd.wfa.wsc', 'message/vnd.wfa.wsc');
		self::$Model = new IANAMediaTypes('Model', '');
		self::$ModExample = new IANAMediaTypes('example', 'model/example');
		self::$ModIges = new IANAMediaTypes('iges', 'model/iges');
		self::$ModMesh = new IANAMediaTypes('mesh', '');
		self::$ModVndColladaXml = new IANAMediaTypes('vnd.collada+xml', 'model/vnd.collada+xml');
		self::$ModVndDwf = new IANAMediaTypes('vnd.dwf', 'model/vnd-dwf');
		self::$ModVndFlatland3Dml = new IANAMediaTypes('vnd.flatland.3dml', 'model/vnd.flatland.3dml');
		self::$ModVndGdl = new IANAMediaTypes('vnd.gdl', 'model/vnd.gdl');
		self::$ModVndGsGdl = new IANAMediaTypes('vnd.gs-gdl', 'model/vnd.gs-gdl');
		self::$ModVndGtw = new IANAMediaTypes('vnd.gtw', 'model/vnd.gtw');
		self::$ModVndMomlXml = new IANAMediaTypes('vnd.moml+xml', 'model/vnd.moml+xml');
		self::$ModVndMts = new IANAMediaTypes('vnd.mts', 'model/vnd.mts');
		self::$ModVndOpengex = new IANAMediaTypes('vnd.opengex', 'model/vnd.opengex');
		self::$ModVndParasolidTransmitBinary = new IANAMediaTypes('vnd.parasolid.transmit.binary', 'model/vnd.parasolid.transmit-binary');
		self::$ModVndParasolidTransmitText = new IANAMediaTypes('vnd.parasolid.transmit.text', 'model/vnd.parasolid.transmit-text');
		self::$ModVndValveSourceCompiledMap = new IANAMediaTypes('vnd.valve.source.compiled-map', 'model/vnd.valve.source.compiled-map');
		self::$ModVndVtu = new IANAMediaTypes('vnd.vtu', 'model/vnd.vtu');
		self::$ModVrml = new IANAMediaTypes('vrml', '');
		self::$ModX3DVrml = new IANAMediaTypes('x3d-vrml', 'model/x3d-vrml');
		self::$ModX3DFastinfoset = new IANAMediaTypes('x3d+fastinfoset', 'model/x3d+fastinfoset');
		self::$ModX3DXml = new IANAMediaTypes('x3d+xml', 'model/x3d+xml');
		self::$Multipart = new IANAMediaTypes('Multipart', '');
		self::$MulAlternative = new IANAMediaTypes('alternative', '');
		self::$MulAppledouble = new IANAMediaTypes('appledouble', 'multipart/appledouble');
		self::$MulByteranges = new IANAMediaTypes('byteranges', 'multipart/byteranges');
		self::$MulDigest = new IANAMediaTypes('digest', '');
		self::$MulEncrypted = new IANAMediaTypes('encrypted', 'multipart/encrypted');
		self::$MulExample = new IANAMediaTypes('example', 'multipart/example');
		self::$MulFormData = new IANAMediaTypes('form-data', 'multipart/form-data');
		self::$MulHeaderSet = new IANAMediaTypes('header-set', 'multipart/header-set');
		self::$MulMixed = new IANAMediaTypes('mixed', '');
		self::$MulParallel = new IANAMediaTypes('parallel', '');
		self::$MulRelated = new IANAMediaTypes('related', 'multipart/related');
		self::$MulReport = new IANAMediaTypes('report', 'multipart/report');
		self::$MulSigned = new IANAMediaTypes('signed', 'multipart/signed');
		self::$MulVoiceMessage = new IANAMediaTypes('voice-message', 'multipart/voice-message');
		self::$MulXMixedReplace = new IANAMediaTypes('x-mixed-replace', 'multipart/x-mixed-replace');
		self::$Text = new IANAMediaTypes('Text', '');
		self::$Txt1DInterleavedParityfec = new IANAMediaTypes('1d-interleaved-parityfec', 'text/1d-interleaved-parityfec');
		self::$TxtCacheManifest = new IANAMediaTypes('cache-manifest', 'text/cache-manifest');
		self::$TxtCalendar = new IANAMediaTypes('calendar', 'text/calendar');
		self::$TxtCss = new IANAMediaTypes('css', 'text/css');
		self::$TxtCsv = new IANAMediaTypes('csv', 'text/csv');
		self::$TxtCsvSchema = new IANAMediaTypes('csv-schema', 'text/csv-schema');
		self::$TxtDirectoryDeprecatedByRfc6350 = new IANAMediaTypes('directory - DEPRECATED by RFC6350', 'text/directory');
		self::$TxtDns = new IANAMediaTypes('dns', 'text/dns');
		self::$TxtEcmascriptObsoletedInFavorOfApplicationEcmascript = new IANAMediaTypes('ecmascript - OBSOLETED in favor of application/ecmascript', 'text/ecmascript');
		self::$TxtEncaprtp = new IANAMediaTypes('encaprtp', 'text/encaprtp');
		self::$TxtEnriched = new IANAMediaTypes('enriched', '');
		self::$TxtExample = new IANAMediaTypes('example', 'text/example');
		self::$TxtFwdred = new IANAMediaTypes('fwdred', 'text/fwdred');
		self::$TxtGrammarRefList = new IANAMediaTypes('grammar-ref-list', 'text/grammar-ref-list');
		self::$TxtHtml = new IANAMediaTypes('html', 'text/html');
		self::$TxtJavascriptObsoletedInFavorOfApplicationJavascript = new IANAMediaTypes('javascript - OBSOLETED in favor of application/javascript', 'text/javascript');
		self::$TxtJcrCnd = new IANAMediaTypes('jcr-cnd', 'text/jcr-cnd');
		self::$TxtMarkdown_Temporary = new IANAMediaTypes('markdown (TEMPORARY - registered 2014-11-11, expires 2015-11-11)', 'text/markdown');
		self::$TxtMizar = new IANAMediaTypes('mizar', 'text/mizar');
		self::$TxtN3 = new IANAMediaTypes('n3', 'text/n3');
		self::$TxtParameters = new IANAMediaTypes('parameters', 'text/parameters');
		self::$TxtParityfec = new IANAMediaTypes('parityfec', '');
		self::$TxtPlain = new IANAMediaTypes('plain', '');
		self::$TxtProvenanceNotation = new IANAMediaTypes('provenance-notation', 'text/provenance-notation');
		self::$TxtPrsFallensteinRst = new IANAMediaTypes('prs.fallenstein.rst', 'text/prs.fallenstein.rst');
		self::$TxtPrsLinesTag = new IANAMediaTypes('prs.lines.tag', 'text/prs.lines.tag');
		self::$TxtRaptorfec = new IANAMediaTypes('raptorfec', 'text/raptorfec');
		self::$TxtRed = new IANAMediaTypes('RED', 'text/RED');
		self::$TxtRfc822Headers = new IANAMediaTypes('rfc822-headers', 'text/rfc822-headers');
		self::$TxtRichtext = new IANAMediaTypes('richtext', '');
		self::$TxtRtf = new IANAMediaTypes('rtf', 'text/rtf');
		self::$TxtRtpEncAescm128 = new IANAMediaTypes('rtp-enc-aescm128', 'text/rtp-enc-aescm128');
		self::$TxtRtploopback = new IANAMediaTypes('rtploopback', 'text/rtploopback');
		self::$TxtRtx = new IANAMediaTypes('rtx', 'text/rtx');
		self::$TxtSgml = new IANAMediaTypes('sgml', 'text/SGML');
		self::$TxtT140 = new IANAMediaTypes('t140', 'text/t140');
		self::$TxtTabSeparatedValues = new IANAMediaTypes('tab-separated-values', 'text/tab-separated-values');
		self::$TxtTroff = new IANAMediaTypes('troff', 'text/troff');
		self::$TxtTurtle = new IANAMediaTypes('turtle', 'text/turtle');
		self::$TxtUlpfec = new IANAMediaTypes('ulpfec', 'text/ulpfec');
		self::$TxtUriList = new IANAMediaTypes('uri-list', 'text/uri-list');
		self::$TxtVcard = new IANAMediaTypes('vcard', 'text/vcard');
		self::$TxtVndA = new IANAMediaTypes('vnd.a', 'text/vnd-a');
		self::$TxtVndAbc = new IANAMediaTypes('vnd.abc', 'text/vnd.abc');
		self::$TxtVndCurl = new IANAMediaTypes('vnd.curl', 'text/vnd-curl');
		self::$TxtVndDebianCopyright = new IANAMediaTypes('vnd.debian.copyright', 'text/vnd.debian.copyright');
		self::$TxtVndDmclientscript = new IANAMediaTypes('vnd.DMClientScript', 'text/vnd.DMClientScript');
		self::$TxtVndDvbSubtitle = new IANAMediaTypes('vnd.dvb.subtitle', 'text/vnd.dvb.subtitle');
		self::$TxtVndEsmertecThemeDescriptor = new IANAMediaTypes('vnd.esmertec.theme-descriptor', 'text/vnd.esmertec.theme-descriptor');
		self::$TxtVndFly = new IANAMediaTypes('vnd.fly', 'text/vnd.fly');
		self::$TxtVndFmiFlexstor = new IANAMediaTypes('vnd.fmi.flexstor', 'text/vnd.fmi.flexstor');
		self::$TxtVndGraphviz = new IANAMediaTypes('vnd.graphviz', 'text/vnd.graphviz');
		self::$TxtVndIn3D3Dml = new IANAMediaTypes('vnd.in3d.3dml', 'text/vnd.in3d.3dml');
		self::$TxtVndIn3DSpot = new IANAMediaTypes('vnd.in3d.spot', 'text/vnd.in3d.spot');
		self::$TxtVndIptcNewsml = new IANAMediaTypes('vnd.IPTC.NewsML', 'text/vnd.IPTC.NewsML');
		self::$TxtVndIptcNitf = new IANAMediaTypes('vnd.IPTC.NITF', 'text/vnd.IPTC.NITF');
		self::$TxtVndLatexZ = new IANAMediaTypes('vnd.latex-z', 'text/vnd.latex-z');
		self::$TxtVndMotorolaReflex = new IANAMediaTypes('vnd.motorola.reflex', 'text/vnd.motorola.reflex');
		self::$TxtVndMsMediapackage = new IANAMediaTypes('vnd.ms-mediapackage', 'text/vnd.ms-mediapackage');
		self::$TxtVndNet2PhoneCommcenterCommand = new IANAMediaTypes('vnd.net2phone.commcenter.command', 'text/vnd.net2phone.commcenter.command');
		self::$TxtVndRadisysMsmlBasicLayout = new IANAMediaTypes('vnd.radisys.msml-basic-layout', 'text/vnd.radisys.msml-basic-layout');
		self::$TxtVndSiUricatalogueObsoletedByRequest = new IANAMediaTypes('vnd.si.uricatalogue - OBSOLETED by request', 'text/vnd.si.uricatalogue');
		self::$TxtVndSunJ2MeAppDescriptor = new IANAMediaTypes('vnd.sun.j2me.app-descriptor', 'text/vnd.sun.j2me.app-descriptor');
		self::$TxtVndTrolltechLinguist = new IANAMediaTypes('vnd.trolltech.linguist', 'text/vnd.trolltech.linguist');
		self::$TxtVndWapSi = new IANAMediaTypes('vnd.wap.si', 'text/vnd.wap.si');
		self::$TxtVndWapSl = new IANAMediaTypes('vnd.wap.sl', 'text/vnd.wap.sl');
		self::$TxtVndWapWml = new IANAMediaTypes('vnd.wap.wml', 'text/vnd.wap-wml');
		self::$TxtVndWapWmlscript = new IANAMediaTypes('vnd.wap.wmlscript', 'text/vnd.wap.wmlscript');
		self::$TxtXml = new IANAMediaTypes('xml', 'text/xml');
		self::$TxtXmlExternalParsedEntity = new IANAMediaTypes('xml-external-parsed-entity', 'text/xml-external-parsed-entity');
		self::$Video = new IANAMediaTypes('Video', '');
		self::$Vid1DInterleavedParityfec = new IANAMediaTypes('1d-interleaved-parityfec', 'video/1d-interleaved-parityfec');
		self::$Vid3Gpp = new IANAMediaTypes('3gpp', 'video/3gpp');
		self::$Vid3Gpp2 = new IANAMediaTypes('3gpp2', 'video/3gpp2');
		self::$Vid3GppTt = new IANAMediaTypes('3gpp-tt', 'video/3gpp-tt');
		self::$VidBmpeg = new IANAMediaTypes('BMPEG', 'video/BMPEG');
		self::$VidBt656 = new IANAMediaTypes('BT656', 'video/BT656');
		self::$VidCelb = new IANAMediaTypes('CelB', 'video/CelB');
		self::$VidDv = new IANAMediaTypes('DV', 'video/DV');
		self::$VidEncaprtp = new IANAMediaTypes('encaprtp', 'video/encaprtp');
		self::$VidExample = new IANAMediaTypes('example', 'video/example');
		self::$VidH261 = new IANAMediaTypes('H261', 'video/H261');
		self::$VidH263 = new IANAMediaTypes('H263', 'video/H263');
		self::$VidH2631998 = new IANAMediaTypes('H263-1998', 'video/H263-1998');
		self::$VidH2632000 = new IANAMediaTypes('H263-2000', 'video/H263-2000');
		self::$VidH264 = new IANAMediaTypes('H264', 'video/H264');
		self::$VidH264Rcdo = new IANAMediaTypes('H264-RCDO', 'video/H264-RCDO');
		self::$VidH264Svc = new IANAMediaTypes('H264-SVC', 'video/H264-SVC');
		self::$VidIsoSegment = new IANAMediaTypes('iso.segment', 'video/iso.segment');
		self::$VidJpeg = new IANAMediaTypes('JPEG', 'video/JPEG');
		self::$VidJpeg2000 = new IANAMediaTypes('jpeg2000', 'video/jpeg2000');
		self::$VidMj2 = new IANAMediaTypes('mj2', 'video/mj2');
		self::$VidMp1S = new IANAMediaTypes('MP1S', 'video/MP1S');
		self::$VidMp2P = new IANAMediaTypes('MP2P', 'video/MP2P');
		self::$VidMp2T = new IANAMediaTypes('MP2T', 'video/MP2T');
		self::$VidMp4 = new IANAMediaTypes('mp4', 'video/mp4');
		self::$VidMp4VEs = new IANAMediaTypes('MP4V-ES', 'video/MP4V-ES');
		self::$VidMpv = new IANAMediaTypes('MPV', 'video/MPV');
		self::$VidMpeg = new IANAMediaTypes('mpeg', '');
		self::$VidMpeg4Generic = new IANAMediaTypes('mpeg4-generic', 'video/mpeg4-generic');
		self::$VidNv = new IANAMediaTypes('nv', 'video/nv');
		self::$VidOgg = new IANAMediaTypes('ogg', 'video/ogg');
		self::$VidParityfec = new IANAMediaTypes('parityfec', '');
		self::$VidPointer = new IANAMediaTypes('pointer', 'video/pointer');
		self::$VidQuicktime = new IANAMediaTypes('quicktime', 'video/quicktime');
		self::$VidRaptorfec = new IANAMediaTypes('raptorfec', 'video/raptorfec');
		self::$VidRaw = new IANAMediaTypes('raw', '');
		self::$VidRtpEncAescm128 = new IANAMediaTypes('rtp-enc-aescm128', 'video/rtp-enc-aescm128');
		self::$VidRtploopback = new IANAMediaTypes('rtploopback', 'video/rtploopback');
		self::$VidRtx = new IANAMediaTypes('rtx', 'video/rtx');
		self::$VidSmpte292M = new IANAMediaTypes('SMPTE292M', 'video/SMPTE292M');
		self::$VidUlpfec = new IANAMediaTypes('ulpfec', 'video/ulpfec');
		self::$VidVc1 = new IANAMediaTypes('vc1', 'video/vc1');
		self::$VidVndCctv = new IANAMediaTypes('vnd.CCTV', 'video/vnd.CCTV');
		self::$VidVndDeceHd = new IANAMediaTypes('vnd.dece.hd', 'video/vnd.dece.hd');
		self::$VidVndDeceMobile = new IANAMediaTypes('vnd.dece.mobile', 'video/vnd.dece.mobile');
		self::$VidVndDeceMp4 = new IANAMediaTypes('vnd.dece.mp4', 'video/vnd.dece-mp4');
		self::$VidVndDecePd = new IANAMediaTypes('vnd.dece.pd', 'video/vnd.dece.pd');
		self::$VidVndDeceSd = new IANAMediaTypes('vnd.dece.sd', 'video/vnd.dece.sd');
		self::$VidVndDeceVideo = new IANAMediaTypes('vnd.dece.video', 'video/vnd.dece.video');
		self::$VidVndDirectvMpeg = new IANAMediaTypes('vnd.directv.mpeg', 'video/vnd.directv-mpeg');
		self::$VidVndDirectvMpegTts = new IANAMediaTypes('vnd.directv.mpeg-tts', 'video/vnd.directv.mpeg-tts');
		self::$VidVndDlnaMpegTts = new IANAMediaTypes('vnd.dlna.mpeg-tts', 'video/vnd.dlna.mpeg-tts');
		self::$VidVndDvbFile = new IANAMediaTypes('vnd.dvb.file', 'video/vnd.dvb.file');
		self::$VidVndFvt = new IANAMediaTypes('vnd.fvt', 'video/vnd.fvt');
		self::$VidVndHnsVideo = new IANAMediaTypes('vnd.hns.video', 'video/vnd.hns.video');
		self::$VidVndIptvforum1Dparityfec1010 = new IANAMediaTypes('vnd.iptvforum.1dparityfec-1010', 'video/vnd.iptvforum.1dparityfec-1010');
		self::$VidVndIptvforum1Dparityfec2005 = new IANAMediaTypes('vnd.iptvforum.1dparityfec-2005', 'video/vnd.iptvforum.1dparityfec-2005');
		self::$VidVndIptvforum2Dparityfec1010 = new IANAMediaTypes('vnd.iptvforum.2dparityfec-1010', 'video/vnd.iptvforum.2dparityfec-1010');
		self::$VidVndIptvforum2Dparityfec2005 = new IANAMediaTypes('vnd.iptvforum.2dparityfec-2005', 'video/vnd.iptvforum.2dparityfec-2005');
		self::$VidVndIptvforumTtsavc = new IANAMediaTypes('vnd.iptvforum.ttsavc', 'video/vnd.iptvforum.ttsavc');
		self::$VidVndIptvforumTtsmpeg2 = new IANAMediaTypes('vnd.iptvforum.ttsmpeg2', 'video/vnd.iptvforum.ttsmpeg2');
		self::$VidVndMotorolaVideo = new IANAMediaTypes('vnd.motorola.video', 'video/vnd.motorola.video');
		self::$VidVndMotorolaVideop = new IANAMediaTypes('vnd.motorola.videop', 'video/vnd.motorola.videop');
		self::$VidVndMpegurl = new IANAMediaTypes('vnd.mpegurl', 'video/vnd-mpegurl');
		self::$VidVndMsPlayreadyMediaPyv = new IANAMediaTypes('vnd.ms-playready.media.pyv', 'video/vnd.ms-playready.media.pyv');
		self::$VidVndNokiaInterleavedMultimedia = new IANAMediaTypes('vnd.nokia.interleaved-multimedia', 'video/vnd.nokia.interleaved-multimedia');
		self::$VidVndNokiaVideovoip = new IANAMediaTypes('vnd.nokia.videovoip', 'video/vnd.nokia.videovoip');
		self::$VidVndObjectvideo = new IANAMediaTypes('vnd.objectvideo', 'video/vnd.objectvideo');
		self::$VidVndRadgamettoolsBink = new IANAMediaTypes('vnd.radgamettools.bink', 'video/vnd.radgamettools.bink');
		self::$VidVndRadgamettoolsSmacker = new IANAMediaTypes('vnd.radgamettools.smacker', 'video/vnd.radgamettools.smacker');
		self::$VidVndSealedMpeg1 = new IANAMediaTypes('vnd.sealed.mpeg1', 'video/vnd.sealed.mpeg1');
		self::$VidVndSealedMpeg4 = new IANAMediaTypes('vnd.sealed.mpeg4', 'video/vnd.sealed.mpeg4');
		self::$VidVndSealedSwf = new IANAMediaTypes('vnd.sealed.swf', 'video/vnd.sealed-swf');
		self::$VidVndSealedmediaSoftsealMov = new IANAMediaTypes('vnd.sealedmedia.softseal.mov', 'video/vnd.sealedmedia.softseal-mov');
		self::$VidVndUvvuMp4 = new IANAMediaTypes('vnd.uvvu.mp4', 'video/vnd.uvvu-mp4');
		self::$VidVndVivo = new IANAMediaTypes('vnd.vivo', 'video/vnd-vivo');
	}
};
IANAMediaTypes::Initialize();
?>