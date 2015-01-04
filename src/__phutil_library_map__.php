<?php

/**
 * This file is automatically generated. Use 'arc liberate' to rebuild it.
 *
 * @generated
 * @phutil-library-version 2
 */
phutil_register_library_map(array(
  '__library_version__' => 2,
  'class' => array(
    'ArcanistAliasWorkflow' => 'workflow/ArcanistAliasWorkflow.php',
    'ArcanistAmendWorkflow' => 'workflow/ArcanistAmendWorkflow.php',
    'ArcanistAnoidWorkflow' => 'workflow/ArcanistAnoidWorkflow.php',
    'ArcanistArcanistLinterTestCase' => 'lint/linter/__tests__/ArcanistArcanistLinterTestCase.php',
    'ArcanistBackoutWorkflow' => 'workflow/ArcanistBackoutWorkflow.php',
    'ArcanistBaseCommitParser' => 'parser/ArcanistBaseCommitParser.php',
    'ArcanistBaseCommitParserTestCase' => 'parser/__tests__/ArcanistBaseCommitParserTestCase.php',
    'ArcanistBaseUnitTestEngine' => 'unit/engine/ArcanistBaseUnitTestEngine.php',
    'ArcanistBaseWorkflow' => 'workflow/ArcanistBaseWorkflow.php',
    'ArcanistBaseXHPASTLinter' => 'lint/linter/ArcanistBaseXHPASTLinter.php',
    'ArcanistBookmarkWorkflow' => 'workflow/ArcanistBookmarkWorkflow.php',
    'ArcanistBranchWorkflow' => 'workflow/ArcanistBranchWorkflow.php',
    'ArcanistBritishTestCase' => 'configuration/__tests__/ArcanistBritishTestCase.php',
    'ArcanistBrowseWorkflow' => 'workflow/ArcanistBrowseWorkflow.php',
    'ArcanistBundle' => 'parser/ArcanistBundle.php',
    'ArcanistBundleTestCase' => 'parser/__tests__/ArcanistBundleTestCase.php',
    'ArcanistCSSLintLinter' => 'lint/linter/ArcanistCSSLintLinter.php',
    'ArcanistCSSLintLinterTestCase' => 'lint/linter/__tests__/ArcanistCSSLintLinterTestCase.php',
    'ArcanistCSharpLinter' => 'lint/linter/ArcanistCSharpLinter.php',
    'ArcanistCallConduitWorkflow' => 'workflow/ArcanistCallConduitWorkflow.php',
    'ArcanistCapabilityNotSupportedException' => 'workflow/exception/ArcanistCapabilityNotSupportedException.php',
    'ArcanistCheckstyleXMLLintRenderer' => 'lint/renderer/ArcanistCheckstyleXMLLintRenderer.php',
    'ArcanistChmodLinter' => 'lint/linter/ArcanistChmodLinter.php',
    'ArcanistCloseRevisionWorkflow' => 'workflow/ArcanistCloseRevisionWorkflow.php',
    'ArcanistCloseWorkflow' => 'workflow/ArcanistCloseWorkflow.php',
    'ArcanistClosureLinter' => 'lint/linter/ArcanistClosureLinter.php',
    'ArcanistClosureLinterTestCase' => 'lint/linter/__tests__/ArcanistClosureLinterTestCase.php',
    'ArcanistCoffeeLintLinter' => 'lint/linter/ArcanistCoffeeLintLinter.php',
    'ArcanistCoffeeLintLinterTestCase' => 'lint/linter/__tests__/ArcanistCoffeeLintLinterTestCase.php',
    'ArcanistCommentRemover' => 'parser/ArcanistCommentRemover.php',
    'ArcanistCommentRemoverTestCase' => 'parser/__tests__/ArcanistCommentRemoverTestCase.php',
    'ArcanistCommitLinter' => 'lint/linter/ArcanistCommitLinter.php',
    'ArcanistCommitLinterTestCase' => 'lint/linter/__tests__/ArcanistCommitLinterTestCase.php',
    'ArcanistCommitWorkflow' => 'workflow/ArcanistCommitWorkflow.php',
    'ArcanistCompilerLikeLintRenderer' => 'lint/renderer/ArcanistCompilerLikeLintRenderer.php',
    'ArcanistConduitLinter' => 'lint/linter/ArcanistConduitLinter.php',
    'ArcanistConfiguration' => 'configuration/ArcanistConfiguration.php',
    'ArcanistConfigurationDrivenLintEngine' => 'lint/engine/ArcanistConfigurationDrivenLintEngine.php',
    'ArcanistConfigurationManager' => 'configuration/ArcanistConfigurationManager.php',
    'ArcanistConsoleLintRenderer' => 'lint/renderer/ArcanistConsoleLintRenderer.php',
    'ArcanistCoverWorkflow' => 'workflow/ArcanistCoverWorkflow.php',
    'ArcanistCppcheckLinter' => 'lint/linter/ArcanistCppcheckLinter.php',
    'ArcanistCppcheckLinterTestCase' => 'lint/linter/__tests__/ArcanistCppcheckLinterTestCase.php',
    'ArcanistCpplintLinter' => 'lint/linter/ArcanistCpplintLinter.php',
    'ArcanistCpplintLinterTestCase' => 'lint/linter/__tests__/ArcanistCpplintLinterTestCase.php',
    'ArcanistDiffChange' => 'parser/diff/ArcanistDiffChange.php',
    'ArcanistDiffChangeType' => 'parser/diff/ArcanistDiffChangeType.php',
    'ArcanistDiffHunk' => 'parser/diff/ArcanistDiffHunk.php',
    'ArcanistDiffParser' => 'parser/ArcanistDiffParser.php',
    'ArcanistDiffParserTestCase' => 'parser/__tests__/ArcanistDiffParserTestCase.php',
    'ArcanistDiffUtils' => 'difference/ArcanistDiffUtils.php',
    'ArcanistDiffUtilsTestCase' => 'difference/__tests__/ArcanistDiffUtilsTestCase.php',
    'ArcanistDiffWorkflow' => 'workflow/ArcanistDiffWorkflow.php',
    'ArcanistDifferentialCommitMessage' => 'differential/ArcanistDifferentialCommitMessage.php',
    'ArcanistDifferentialCommitMessageParserException' => 'differential/ArcanistDifferentialCommitMessageParserException.php',
    'ArcanistDifferentialDependencyGraph' => 'differential/ArcanistDifferentialDependencyGraph.php',
    'ArcanistDifferentialRevisionHash' => 'differential/constants/ArcanistDifferentialRevisionHash.php',
    'ArcanistDifferentialRevisionStatus' => 'differential/constants/ArcanistDifferentialRevisionStatus.php',
    'ArcanistDownloadWorkflow' => 'workflow/ArcanistDownloadWorkflow.php',
    'ArcanistEventType' => 'events/constant/ArcanistEventType.php',
    'ArcanistExportWorkflow' => 'workflow/ArcanistExportWorkflow.php',
    'ArcanistExternalLinter' => 'lint/linter/ArcanistExternalLinter.php',
    'ArcanistFeatureWorkflow' => 'workflow/ArcanistFeatureWorkflow.php',
    'ArcanistFilenameLinter' => 'lint/linter/ArcanistFilenameLinter.php',
    'ArcanistFlagWorkflow' => 'workflow/ArcanistFlagWorkflow.php',
    'ArcanistFlake8Linter' => 'lint/linter/ArcanistFlake8Linter.php',
    'ArcanistFlake8LinterTestCase' => 'lint/linter/__tests__/ArcanistFlake8LinterTestCase.php',
    'ArcanistFutureLinter' => 'lint/linter/ArcanistFutureLinter.php',
    'ArcanistGeneratedLinter' => 'lint/linter/ArcanistGeneratedLinter.php',
    'ArcanistGetConfigWorkflow' => 'workflow/ArcanistGetConfigWorkflow.php',
    'ArcanistGitAPI' => 'repository/api/ArcanistGitAPI.php',
    'ArcanistGitHookPreReceiveWorkflow' => 'workflow/ArcanistGitHookPreReceiveWorkflow.php',
    'ArcanistGoLintLinter' => 'lint/linter/ArcanistGoLintLinter.php',
    'ArcanistGoLintLinterTestCase' => 'lint/linter/__tests__/ArcanistGoLintLinterTestCase.php',
    'ArcanistHLintLinter' => 'lint/linter/ArcanistHLintLinter.php',
    'ArcanistHLintLinterTestCase' => 'lint/linter/__tests__/ArcanistHLintLinterTestCase.php',
    'ArcanistHelpWorkflow' => 'workflow/ArcanistHelpWorkflow.php',
    'ArcanistHgClientChannel' => 'hgdaemon/ArcanistHgClientChannel.php',
    'ArcanistHgProxyClient' => 'hgdaemon/ArcanistHgProxyClient.php',
    'ArcanistHgProxyServer' => 'hgdaemon/ArcanistHgProxyServer.php',
    'ArcanistHgServerChannel' => 'hgdaemon/ArcanistHgServerChannel.php',
    'ArcanistHookAPI' => 'repository/hookapi/ArcanistHookAPI.php',
    'ArcanistInfrastructureTestCase' => '__tests__/ArcanistInfrastructureTestCase.php',
    'ArcanistInstallCertificateWorkflow' => 'workflow/ArcanistInstallCertificateWorkflow.php',
    'ArcanistJSHintLinter' => 'lint/linter/ArcanistJSHintLinter.php',
    'ArcanistJSHintLinterTestCase' => 'lint/linter/__tests__/ArcanistJSHintLinterTestCase.php',
    'ArcanistJSONLintLinter' => 'lint/linter/ArcanistJSONLintLinter.php',
    'ArcanistJSONLintLinterTestCase' => 'lint/linter/__tests__/ArcanistJSONLintLinterTestCase.php',
    'ArcanistJSONLintRenderer' => 'lint/renderer/ArcanistJSONLintRenderer.php',
    'ArcanistJSONLinter' => 'lint/linter/ArcanistJSONLinter.php',
    'ArcanistJSONLinterTestCase' => 'lint/linter/__tests__/ArcanistJSONLinterTestCase.php',
    'ArcanistJscsLinter' => 'lint/linter/ArcanistJscsLinter.php',
    'ArcanistJscsLinterTestCase' => 'lint/linter/__tests__/ArcanistJscsLinterTestCase.php',
    'ArcanistLandWorkflow' => 'workflow/ArcanistLandWorkflow.php',
    'ArcanistLesscLinter' => 'lint/linter/ArcanistLesscLinter.php',
    'ArcanistLesscLinterTestCase' => 'lint/linter/__tests__/ArcanistLesscLinterTestCase.php',
    'ArcanistLiberateWorkflow' => 'workflow/ArcanistLiberateWorkflow.php',
    'ArcanistLintEngine' => 'lint/engine/ArcanistLintEngine.php',
    'ArcanistLintMessage' => 'lint/ArcanistLintMessage.php',
    'ArcanistLintPatcher' => 'lint/ArcanistLintPatcher.php',
    'ArcanistLintRenderer' => 'lint/renderer/ArcanistLintRenderer.php',
    'ArcanistLintResult' => 'lint/ArcanistLintResult.php',
    'ArcanistLintSeverity' => 'lint/ArcanistLintSeverity.php',
    'ArcanistLintWorkflow' => 'workflow/ArcanistLintWorkflow.php',
    'ArcanistLinter' => 'lint/linter/ArcanistLinter.php',
    'ArcanistLinterTestCase' => 'lint/linter/__tests__/ArcanistLinterTestCase.php',
    'ArcanistLintersWorkflow' => 'workflow/ArcanistLintersWorkflow.php',
    'ArcanistListWorkflow' => 'workflow/ArcanistListWorkflow.php',
    'ArcanistMercurialAPI' => 'repository/api/ArcanistMercurialAPI.php',
    'ArcanistMercurialParser' => 'repository/parser/ArcanistMercurialParser.php',
    'ArcanistMercurialParserTestCase' => 'repository/parser/__tests__/ArcanistMercurialParserTestCase.php',
    'ArcanistMergeConflictLinter' => 'lint/linter/ArcanistMergeConflictLinter.php',
    'ArcanistMergeConflictLinterTestCase' => 'lint/linter/__tests__/ArcanistMergeConflictLinterTestCase.php',
    'ArcanistNoEffectException' => 'exception/usage/ArcanistNoEffectException.php',
    'ArcanistNoEngineException' => 'exception/usage/ArcanistNoEngineException.php',
    'ArcanistNoLintLinter' => 'lint/linter/ArcanistNoLintLinter.php',
    'ArcanistNoLintTestCaseMisnamed' => 'lint/linter/__tests__/ArcanistNoLintTestCase.php',
    'ArcanistNoneLintRenderer' => 'lint/renderer/ArcanistNoneLintRenderer.php',
    'ArcanistPEP8Linter' => 'lint/linter/ArcanistPEP8Linter.php',
    'ArcanistPEP8LinterTestCase' => 'lint/linter/__tests__/ArcanistPEP8LinterTestCase.php',
    'ArcanistPasteWorkflow' => 'workflow/ArcanistPasteWorkflow.php',
    'ArcanistPatchWorkflow' => 'workflow/ArcanistPatchWorkflow.php',
    'ArcanistPhpLinter' => 'lint/linter/ArcanistPhpLinter.php',
    'ArcanistPhpLinterTestCase' => 'lint/linter/__tests__/ArcanistPhpLinterTestCase.php',
    'ArcanistPhpcsLinter' => 'lint/linter/ArcanistPhpcsLinter.php',
    'ArcanistPhpcsLinterTestCase' => 'lint/linter/__tests__/ArcanistPhpcsLinterTestCase.php',
    'ArcanistPhrequentWorkflow' => 'workflow/ArcanistPhrequentWorkflow.php',
    'ArcanistPhutilLibraryLinter' => 'lint/linter/ArcanistPhutilLibraryLinter.php',
    'ArcanistPhutilTestCase' => 'unit/engine/phutil/ArcanistPhutilTestCase.php',
    'ArcanistPhutilTestCaseTestCase' => 'unit/engine/phutil/testcase/ArcanistPhutilTestCaseTestCase.php',
    'ArcanistPhutilTestSkippedException' => 'unit/engine/phutil/testcase/ArcanistPhutilTestSkippedException.php',
    'ArcanistPhutilTestTerminatedException' => 'unit/engine/phutil/testcase/ArcanistPhutilTestTerminatedException.php',
    'ArcanistPhutilXHPASTLinter' => 'lint/linter/ArcanistPhutilXHPASTLinter.php',
    'ArcanistPhutilXHPASTLinterTestCase' => 'lint/linter/__tests__/ArcanistPhutilXHPASTLinterTestCase.php',
    'ArcanistPuppetLintLinter' => 'lint/linter/ArcanistPuppetLintLinter.php',
    'ArcanistPuppetLintLinterTestCase' => 'lint/linter/__tests__/ArcanistPuppetLintLinterTestCase.php',
    'ArcanistPyFlakesLinter' => 'lint/linter/ArcanistPyFlakesLinter.php',
    'ArcanistPyFlakesLinterTestCase' => 'lint/linter/__tests__/ArcanistPyFlakesLinterTestCase.php',
    'ArcanistPyLintLinter' => 'lint/linter/ArcanistPyLintLinter.php',
    'ArcanistPyLintLinterTestCase' => 'lint/linter/__tests__/ArcanistPyLintLinterTestCase.php',
    'ArcanistRepositoryAPI' => 'repository/api/ArcanistRepositoryAPI.php',
    'ArcanistRepositoryAPIMiscTestCase' => 'repository/api/__tests__/ArcanistRepositoryAPIMiscTestCase.php',
    'ArcanistRepositoryAPIStateTestCase' => 'repository/api/__tests__/ArcanistRepositoryAPIStateTestCase.php',
    'ArcanistRevertWorkflow' => 'workflow/ArcanistRevertWorkflow.php',
    'ArcanistRubyLinter' => 'lint/linter/ArcanistRubyLinter.php',
    'ArcanistRubyLinterTestCase' => 'lint/linter/__tests__/ArcanistRubyLinterTestCase.php',
    'ArcanistScriptAndRegexLinter' => 'lint/linter/ArcanistScriptAndRegexLinter.php',
    'ArcanistSetConfigWorkflow' => 'workflow/ArcanistSetConfigWorkflow.php',
    'ArcanistSettings' => 'configuration/ArcanistSettings.php',
    'ArcanistShellCompleteWorkflow' => 'workflow/ArcanistShellCompleteWorkflow.php',
    'ArcanistSingleLintEngine' => 'lint/engine/ArcanistSingleLintEngine.php',
    'ArcanistSpellingLinter' => 'lint/linter/ArcanistSpellingLinter.php',
    'ArcanistSpellingLinterTestCase' => 'lint/linter/__tests__/ArcanistSpellingLinterTestCase.php',
    'ArcanistStartWorkflow' => 'workflow/ArcanistStartWorkflow.php',
    'ArcanistStopWorkflow' => 'workflow/ArcanistStopWorkflow.php',
    'ArcanistSubversionAPI' => 'repository/api/ArcanistSubversionAPI.php',
    'ArcanistSubversionHookAPI' => 'repository/hookapi/ArcanistSubversionHookAPI.php',
    'ArcanistSummaryLintRenderer' => 'lint/renderer/ArcanistSummaryLintRenderer.php',
    'ArcanistSvnHookPreCommitWorkflow' => 'workflow/ArcanistSvnHookPreCommitWorkflow.php',
    'ArcanistTasksWorkflow' => 'workflow/ArcanistTasksWorkflow.php',
    'ArcanistTestCase' => 'infrastructure/testing/ArcanistTestCase.php',
    'ArcanistTestResultParser' => 'unit/engine/ArcanistTestResultParser.php',
    'ArcanistTextLinter' => 'lint/linter/ArcanistTextLinter.php',
    'ArcanistTextLinterTestCase' => 'lint/linter/__tests__/ArcanistTextLinterTestCase.php',
    'ArcanistTimeWorkflow' => 'workflow/ArcanistTimeWorkflow.php',
    'ArcanistTodoWorkflow' => 'workflow/ArcanistTodoWorkflow.php',
    'ArcanistUncommittedChangesException' => 'exception/usage/ArcanistUncommittedChangesException.php',
    'ArcanistUnitConsoleRenderer' => 'unit/renderer/ArcanistUnitConsoleRenderer.php',
    'ArcanistUnitRenderer' => 'unit/renderer/ArcanistUnitRenderer.php',
    'ArcanistUnitTestEngine' => 'unit/engine/ArcanistUnitTestEngine.php',
    'ArcanistUnitTestResult' => 'unit/ArcanistUnitTestResult.php',
    'ArcanistUnitWorkflow' => 'workflow/ArcanistUnitWorkflow.php',
    'ArcanistUpgradeWorkflow' => 'workflow/ArcanistUpgradeWorkflow.php',
    'ArcanistUploadWorkflow' => 'workflow/ArcanistUploadWorkflow.php',
    'ArcanistUsageException' => 'exception/ArcanistUsageException.php',
    'ArcanistUserAbortException' => 'exception/usage/ArcanistUserAbortException.php',
    'ArcanistVersionWorkflow' => 'workflow/ArcanistVersionWorkflow.php',
    'ArcanistWhichWorkflow' => 'workflow/ArcanistWhichWorkflow.php',
    'ArcanistWorkflow' => 'workflow/ArcanistWorkflow.php',
    'ArcanistWorkingCopyIdentity' => 'workingcopyidentity/ArcanistWorkingCopyIdentity.php',
    'ArcanistXHPASTLintNamingHook' => 'lint/linter/xhpast/ArcanistXHPASTLintNamingHook.php',
    'ArcanistXHPASTLintNamingHookTestCase' => 'lint/linter/xhpast/__tests__/ArcanistXHPASTLintNamingHookTestCase.php',
    'ArcanistXHPASTLintSwitchHook' => 'lint/linter/xhpast/ArcanistXHPASTLintSwitchHook.php',
    'ArcanistXHPASTLintTestSwitchHook' => 'lint/linter/__tests__/ArcanistXHPASTLintTestSwitchHook.php',
    'ArcanistXHPASTLinter' => 'lint/linter/ArcanistXHPASTLinter.php',
    'ArcanistXHPASTLinterTestCase' => 'lint/linter/__tests__/ArcanistXHPASTLinterTestCase.php',
    'ArcanistXMLLinter' => 'lint/linter/ArcanistXMLLinter.php',
    'ArcanistXMLLinterTestCase' => 'lint/linter/__tests__/ArcanistXMLLinterTestCase.php',
    'ArcanistXUnitTestResultParser' => 'unit/engine/ArcanistXUnitTestResultParser.php',
    'CSharpToolsTestEngine' => 'unit/engine/CSharpToolsTestEngine.php',
    'ComprehensiveLintEngine' => 'lint/engine/ComprehensiveLintEngine.php',
    'GoTestResultParser' => 'unit/engine/GoTestResultParser.php',
    'GoTestResultParserTestCase' => 'unit/engine/__tests__/GoTestResultParserTestCase.php',
    'NoseTestEngine' => 'unit/engine/NoseTestEngine.php',
    'PHPUnitTestEngineTestCase' => 'unit/engine/__tests__/PHPUnitTestEngineTestCase.php',
    'PhpunitResultParser' => 'unit/engine/PhpunitResultParser.php',
    'PhpunitTestEngine' => 'unit/engine/PhpunitTestEngine.php',
    'PhutilUnitTestEngine' => 'unit/engine/PhutilUnitTestEngine.php',
    'PhutilUnitTestEngineTestCase' => 'unit/engine/__tests__/PhutilUnitTestEngineTestCase.php',
    'PytestTestEngine' => 'unit/engine/PytestTestEngine.php',
    'UnitTestableArcanistLintEngine' => 'lint/engine/UnitTestableArcanistLintEngine.php',
    'XUnitTestEngine' => 'unit/engine/XUnitTestEngine.php',
    'XUnitTestResultParserTestCase' => 'unit/engine/__tests__/XUnitTestResultParserTestCase.php',
  ),
  'function' => array(),
  'xmap' => array(
    'ArcanistAliasWorkflow' => 'ArcanistWorkflow',
    'ArcanistAmendWorkflow' => 'ArcanistWorkflow',
    'ArcanistAnoidWorkflow' => 'ArcanistWorkflow',
    'ArcanistArcanistLinterTestCase' => 'ArcanistLinterTestCase',
    'ArcanistBackoutWorkflow' => 'ArcanistWorkflow',
    'ArcanistBaseCommitParserTestCase' => 'ArcanistTestCase',
    'ArcanistBaseUnitTestEngine' => 'ArcanistUnitTestEngine',
    'ArcanistBaseWorkflow' => 'ArcanistWorkflow',
    'ArcanistBaseXHPASTLinter' => 'ArcanistFutureLinter',
    'ArcanistBookmarkWorkflow' => 'ArcanistFeatureWorkflow',
    'ArcanistBranchWorkflow' => 'ArcanistFeatureWorkflow',
    'ArcanistBritishTestCase' => 'ArcanistTestCase',
    'ArcanistBrowseWorkflow' => 'ArcanistWorkflow',
    'ArcanistBundleTestCase' => 'ArcanistTestCase',
    'ArcanistCSSLintLinter' => 'ArcanistExternalLinter',
    'ArcanistCSSLintLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistCSharpLinter' => 'ArcanistLinter',
    'ArcanistCallConduitWorkflow' => 'ArcanistWorkflow',
    'ArcanistCapabilityNotSupportedException' => 'Exception',
    'ArcanistCheckstyleXMLLintRenderer' => 'ArcanistLintRenderer',
    'ArcanistChmodLinter' => 'ArcanistLinter',
    'ArcanistCloseRevisionWorkflow' => 'ArcanistWorkflow',
    'ArcanistCloseWorkflow' => 'ArcanistWorkflow',
    'ArcanistClosureLinter' => 'ArcanistExternalLinter',
    'ArcanistClosureLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistCoffeeLintLinter' => 'ArcanistExternalLinter',
    'ArcanistCoffeeLintLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistCommentRemoverTestCase' => 'ArcanistTestCase',
    'ArcanistCommitLinter' => 'ArcanistLinter',
    'ArcanistCommitLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistCommitWorkflow' => 'ArcanistWorkflow',
    'ArcanistCompilerLikeLintRenderer' => 'ArcanistLintRenderer',
    'ArcanistConduitLinter' => 'ArcanistLinter',
    'ArcanistConfigurationDrivenLintEngine' => 'ArcanistLintEngine',
    'ArcanistConsoleLintRenderer' => 'ArcanistLintRenderer',
    'ArcanistCoverWorkflow' => 'ArcanistWorkflow',
    'ArcanistCppcheckLinter' => 'ArcanistExternalLinter',
    'ArcanistCppcheckLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistCpplintLinter' => 'ArcanistExternalLinter',
    'ArcanistCpplintLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistDiffParserTestCase' => 'ArcanistTestCase',
    'ArcanistDiffUtilsTestCase' => 'ArcanistTestCase',
    'ArcanistDiffWorkflow' => 'ArcanistWorkflow',
    'ArcanistDifferentialCommitMessageParserException' => 'Exception',
    'ArcanistDifferentialDependencyGraph' => 'AbstractDirectedGraph',
    'ArcanistDownloadWorkflow' => 'ArcanistWorkflow',
    'ArcanistEventType' => 'PhutilEventType',
    'ArcanistExportWorkflow' => 'ArcanistWorkflow',
    'ArcanistExternalLinter' => 'ArcanistFutureLinter',
    'ArcanistFeatureWorkflow' => 'ArcanistWorkflow',
    'ArcanistFilenameLinter' => 'ArcanistLinter',
    'ArcanistFlagWorkflow' => 'ArcanistWorkflow',
    'ArcanistFlake8Linter' => 'ArcanistExternalLinter',
    'ArcanistFlake8LinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistFutureLinter' => 'ArcanistLinter',
    'ArcanistGeneratedLinter' => 'ArcanistLinter',
    'ArcanistGetConfigWorkflow' => 'ArcanistWorkflow',
    'ArcanistGitAPI' => 'ArcanistRepositoryAPI',
    'ArcanistGitHookPreReceiveWorkflow' => 'ArcanistWorkflow',
    'ArcanistGoLintLinter' => 'ArcanistExternalLinter',
    'ArcanistGoLintLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistHLintLinter' => 'ArcanistExternalLinter',
    'ArcanistHLintLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistHelpWorkflow' => 'ArcanistWorkflow',
    'ArcanistHgClientChannel' => 'PhutilProtocolChannel',
    'ArcanistHgServerChannel' => 'PhutilProtocolChannel',
    'ArcanistInfrastructureTestCase' => 'ArcanistTestCase',
    'ArcanistInstallCertificateWorkflow' => 'ArcanistWorkflow',
    'ArcanistJSHintLinter' => 'ArcanistExternalLinter',
    'ArcanistJSHintLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistJSONLintLinter' => 'ArcanistExternalLinter',
    'ArcanistJSONLintLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistJSONLintRenderer' => 'ArcanistLintRenderer',
    'ArcanistJSONLinter' => 'ArcanistLinter',
    'ArcanistJSONLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistJscsLinter' => 'ArcanistExternalLinter',
    'ArcanistJscsLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistLandWorkflow' => 'ArcanistWorkflow',
    'ArcanistLesscLinter' => 'ArcanistExternalLinter',
    'ArcanistLesscLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistLiberateWorkflow' => 'ArcanistWorkflow',
    'ArcanistLintWorkflow' => 'ArcanistWorkflow',
    'ArcanistLinterTestCase' => 'ArcanistPhutilTestCase',
    'ArcanistLintersWorkflow' => 'ArcanistWorkflow',
    'ArcanistListWorkflow' => 'ArcanistWorkflow',
    'ArcanistMercurialAPI' => 'ArcanistRepositoryAPI',
    'ArcanistMercurialParserTestCase' => 'ArcanistTestCase',
    'ArcanistMergeConflictLinter' => 'ArcanistLinter',
    'ArcanistMergeConflictLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistNoEffectException' => 'ArcanistUsageException',
    'ArcanistNoEngineException' => 'ArcanistUsageException',
    'ArcanistNoLintLinter' => 'ArcanistLinter',
    'ArcanistNoLintTestCaseMisnamed' => 'ArcanistLinterTestCase',
    'ArcanistNoneLintRenderer' => 'ArcanistLintRenderer',
    'ArcanistPEP8Linter' => 'ArcanistExternalLinter',
    'ArcanistPEP8LinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistPasteWorkflow' => 'ArcanistWorkflow',
    'ArcanistPatchWorkflow' => 'ArcanistWorkflow',
    'ArcanistPhpLinter' => 'ArcanistExternalLinter',
    'ArcanistPhpLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistPhpcsLinter' => 'ArcanistExternalLinter',
    'ArcanistPhpcsLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistPhrequentWorkflow' => 'ArcanistWorkflow',
    'ArcanistPhutilLibraryLinter' => 'ArcanistLinter',
    'ArcanistPhutilTestCaseTestCase' => 'ArcanistPhutilTestCase',
    'ArcanistPhutilTestSkippedException' => 'Exception',
    'ArcanistPhutilTestTerminatedException' => 'Exception',
    'ArcanistPhutilXHPASTLinter' => 'ArcanistBaseXHPASTLinter',
    'ArcanistPhutilXHPASTLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistPuppetLintLinter' => 'ArcanistExternalLinter',
    'ArcanistPuppetLintLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistPyFlakesLinter' => 'ArcanistExternalLinter',
    'ArcanistPyFlakesLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistPyLintLinter' => 'ArcanistLinter',
    'ArcanistPyLintLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistRepositoryAPIMiscTestCase' => 'ArcanistTestCase',
    'ArcanistRepositoryAPIStateTestCase' => 'ArcanistTestCase',
    'ArcanistRevertWorkflow' => 'ArcanistWorkflow',
    'ArcanistRubyLinter' => 'ArcanistExternalLinter',
    'ArcanistRubyLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistScriptAndRegexLinter' => 'ArcanistLinter',
    'ArcanistSetConfigWorkflow' => 'ArcanistWorkflow',
    'ArcanistShellCompleteWorkflow' => 'ArcanistWorkflow',
    'ArcanistSingleLintEngine' => 'ArcanistLintEngine',
    'ArcanistSpellingLinter' => 'ArcanistLinter',
    'ArcanistSpellingLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistStartWorkflow' => 'ArcanistPhrequentWorkflow',
    'ArcanistStopWorkflow' => 'ArcanistPhrequentWorkflow',
    'ArcanistSubversionAPI' => 'ArcanistRepositoryAPI',
    'ArcanistSubversionHookAPI' => 'ArcanistHookAPI',
    'ArcanistSummaryLintRenderer' => 'ArcanistLintRenderer',
    'ArcanistSvnHookPreCommitWorkflow' => 'ArcanistWorkflow',
    'ArcanistTasksWorkflow' => 'ArcanistWorkflow',
    'ArcanistTestCase' => 'ArcanistPhutilTestCase',
    'ArcanistTextLinter' => 'ArcanistLinter',
    'ArcanistTextLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistTimeWorkflow' => 'ArcanistPhrequentWorkflow',
    'ArcanistTodoWorkflow' => 'ArcanistWorkflow',
    'ArcanistUncommittedChangesException' => 'ArcanistUsageException',
    'ArcanistUnitConsoleRenderer' => 'ArcanistUnitRenderer',
    'ArcanistUnitWorkflow' => 'ArcanistWorkflow',
    'ArcanistUpgradeWorkflow' => 'ArcanistWorkflow',
    'ArcanistUploadWorkflow' => 'ArcanistWorkflow',
    'ArcanistUsageException' => 'Exception',
    'ArcanistUserAbortException' => 'ArcanistUsageException',
    'ArcanistVersionWorkflow' => 'ArcanistWorkflow',
    'ArcanistWhichWorkflow' => 'ArcanistWorkflow',
    'ArcanistWorkflow' => 'Phobject',
    'ArcanistXHPASTLintNamingHookTestCase' => 'ArcanistTestCase',
    'ArcanistXHPASTLintTestSwitchHook' => 'ArcanistXHPASTLintSwitchHook',
    'ArcanistXHPASTLinter' => 'ArcanistBaseXHPASTLinter',
    'ArcanistXHPASTLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistXMLLinter' => 'ArcanistLinter',
    'ArcanistXMLLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'CSharpToolsTestEngine' => 'XUnitTestEngine',
    'ComprehensiveLintEngine' => 'ArcanistLintEngine',
    'GoTestResultParser' => 'ArcanistTestResultParser',
    'GoTestResultParserTestCase' => 'ArcanistTestCase',
    'NoseTestEngine' => 'ArcanistUnitTestEngine',
    'PHPUnitTestEngineTestCase' => 'ArcanistTestCase',
    'PhpunitResultParser' => 'ArcanistTestResultParser',
    'PhpunitTestEngine' => 'ArcanistUnitTestEngine',
    'PhutilUnitTestEngine' => 'ArcanistUnitTestEngine',
    'PhutilUnitTestEngineTestCase' => 'ArcanistTestCase',
    'PytestTestEngine' => 'ArcanistUnitTestEngine',
    'UnitTestableArcanistLintEngine' => 'ArcanistLintEngine',
    'XUnitTestEngine' => 'ArcanistUnitTestEngine',
    'XUnitTestResultParserTestCase' => 'ArcanistTestCase',
  ),
));
