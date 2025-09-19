- [ ] Modify resources/css/side-nav.scss to make sidebar fixed and add scrolling
- [ ] Test the changes by running the application
## Phase 1: Planning and Analysis
- [ ] **Audit Current Structure**
  - [ ] Document all existing view files and their purposes
  - [ ] Map current country/curriculum organization (br, ng folders)
  - [ ] Analyze lessons.json structure and usage patterns
  - [ ] Identify shared components and layouts
  - [ ] Document current routing patterns

- [ ] **Create Migration Plan**
  - [ ] Design new directory structure based on recommendations
  - [ ] Map existing files to new locations
  - [ ] Identify dependencies between views
  - [ ] Plan migration in phases to avoid breaking changes
  - [ ] Create backup strategy for existing views

## Phase 2: Infrastructure Setup
- [ ] **Implement Base Layouts**
  - [ ] Create countries/br/layouts/app.blade.php
  - [ ] Create countries/ng/layouts/app.blade.php
  - [ ] Create countries/br/layouts/curriculum.blade.php
  - [ ] Create countries/ng/layouts/curriculum.blade.php
  - [ ] Move shared layouts to resources/views/shared/layouts/

- [x] **Create Directory Structure**
  - [x] Create countries/br/curriculums/ with subfolders
  - [x] Create countries/ng/curriculums/ with subfolders
  - [x] Create countries/br/shared/components/
  - [x] Create countries/ng/shared/components/
  - [x] Create countries/br/metadata/
  - [x] Create countries/ng/metadata/

## Phase 3: View Migration
- [ ] **Migrate Britain (BR) Views**
  - [ ] Move EYFS curriculum views to countries/br/curriculums/eyfs/
    - [ ] Create countries/br/curriculums/eyfs/y0/ structure
    - [ ] Move EYFS subjects (maths, english) to respective year folders
  - [ ] Move KS1 curriculum views to countries/br/curriculums/ks1/
    - [ ] Create countries/br/curriculums/ks1/y1/ and y2/ structures
    - [ ] Move KS1 subjects (maths, english) to respective year folders
  - [ ] Move KS2 curriculum views to countries/br/curriculums/ks2/
    - [ ] Create countries/br/curriculums/ks2/y3/, y4/, y5/, y6/ structures
    - [ ] Move KS2 subjects (maths, english) to respective year folders
  - [ ] Move KS3 curriculum views to countries/br/curriculums/ks3/
    - [ ] Create countries/br/curriculums/ks3/y7/, y8/, y9/ structures
    - [ ] Move KS3 subjects (maths, english) to respective year folders
  - [ ] Move KS4 curriculum views to countries/br/curriculums/ks4/
    - [ ] Create countries/br/curriculums/ks4/y10/, y11/ structures
    - [ ] Move KS4 subjects (maths, english) to respective year folders
  - [ ] Move KS5 curriculum views to countries/br/curriculums/ks5/
    - [ ] Create countries/br/curriculums/ks5/y12/, y13/ structures
    - [ ] Move KS5 subjects (maths, english) to respective year folders
  - [ ] Update lessons.json to new metadata structure

- [ ] **Migrate Nigeria (NG) Views**
  - [ ] Move English curriculum views to countries/ng/curriculums/english/
    - [ ] Create countries/ng/curriculums/english/primary-1/ through primary-6/
    - [ ] Create countries/ng/curriculums/english/jss-1/, jss-2/, jss-3/
    - [ ] Create countries/ng/curriculums/english/sss-1/, sss-2/, sss-3/
  - [ ] Move Maths curriculum views to countries/ng/curriculums/maths/
    - [ ] Create year-specific folders for maths curriculum
  - [ ] Move Government curriculum views to countries/ng/curriculums/government/
    - [ ] Create year-specific folders for government curriculum
  - [ ] Move IT curriculum views to countries/ng/curriculums/it/
    - [ ] Create year-specific folders for IT curriculum
  - [ ] Move Literature-in-English views to countries/ng/curriculums/literature/
    - [ ] Create year-specific folders for literature curriculum
  - [ ] Create curriculum-config.json for NG structure

## Phase 4: Backend Updates
- [ ] **Update Routes and Controllers**
  - [ ] Create CountryMiddleware for country validation
  - [ ] Update web.php with country-prefixed routes
  - [ ] Create CurriculumController for curriculum pages
  - [ ] Create SubjectController for subject pages
  - [ ] Create LessonController for lesson pages
  - [ ] Update existing controllers to use new structure

- [ ] **Implement View Composers**
  - [ ] Create view composers for country/curriculum data injection
  - [ ] Add metadata loading in composers
  - [ ] Create shared data providers
  - [ ] Test composer functionality

## Phase 5: Metadata Enhancement
- [ ] **Enhance Metadata Structure**
  - [ ] Update lessons.json with new properties (objectives, resources, difficulty)
  - [ ] Create curriculum-config.json files for each country
  - [ ] Add subject metadata files
  - [ ] Create lesson progression mapping
  - [ ] Add localization keys to metadata

- [ ] **Create Metadata Management**
  - [ ] Create console commands for metadata validation
  - [ ] Add metadata caching mechanisms
  - [ ] Create metadata update workflows
  - [ ] Add metadata versioning

## Phase 6: Components and Shared Elements
- [ ] **Create Reusable Components**
  - [ ] Create lesson-card.blade.php component
  - [ ] Create curriculum-navigation.blade.php component
  - [ ] Create progress-indicator.blade.php component
  - [ ] Create subject-overview.blade.php component

- [ ] **Update Partials**
  - [ ] Move country-specific partials to respective folders
  - [ ] Create shared partials in resources/views/shared/partials/
  - [ ] Update breadcrumb navigation for new structure
  - [ ] Update side navigation for curriculum hierarchy

## Phase 7: Localization and Internationalization
- [ ] **Setup Localization**
  - [ ] Create language files for each country
  - [ ] Add translation keys for curriculum terms
  - [ ] Create country-specific content translations
  - [ ] Setup fallback language chains

- [ ] **Implement i18n Features**
  - [ ] Add language switching functionality
  - [ ] Create translated metadata files
  - [ ] Update views to use translation helpers
  - [ ] Test localization across different countries

## Phase 8: Testing and Quality Assurance
- [ ] **Add Testing**
  - [ ] Create unit tests for view composers
  - [ ] Create feature tests for country/curriculum routes
  - [ ] Add integration tests for metadata loading
  - [ ] Create browser tests for view rendering

- [ ] **Quality Assurance**
  - [ ] Test view rendering across all countries/curriculums
  - [ ] Validate metadata integrity
  - [ ] Check responsive design across views
  - [ ] Performance test with large metadata files

## Phase 9: Performance Optimization
- [ ] **Implement Caching**
  - [ ] Cache metadata files with appropriate TTL
  - [ ] Cache compiled views for frequently accessed pages
  - [ ] Implement Redis caching for session data
  - [ ] Add cache invalidation strategies

- [ ] **Optimize Loading**
  - [ ] Implement lazy loading for lesson content
  - [ ] Add pagination for large curriculum lists
  - [ ] Optimize database queries for metadata
  - [ ] Compress and minify view assets

## Phase 10: Documentation and Deployment
- [ ] **Create Documentation**
  - [ ] Document new directory structure
  - [ ] Create developer guide for adding new countries
  - [ ] Document metadata format and requirements
  - [ ] Create content creator guidelines

- [ ] **Deployment Preparation**
  - [ ] Update deployment scripts for new structure
  - [ ] Create database migrations if needed
  - [ ] Update environment configurations
  - [ ] Plan rollback strategy

## Phase 11: Future Enhancements
- [ ] **Scalability Improvements**
  - [ ] Implement content management system integration
  - [ ] Add API endpoints for dynamic content loading
  - [ ] Create admin interface for metadata management
  - [ ] Implement A/B testing for curriculum variations

- [ ] **Monitoring and Analytics**
  - [ ] Add tracking for curriculum usage
  - [ ] Implement performance monitoring
  - [ ] Create analytics dashboard
  - [ ] Add error tracking and reporting

## Risk Mitigation
- [ ] **Backup Strategy**: Regular backups of existing structure
- [ ] **Rollback Plan**: Ability to revert to old structure if needed
- [ ] **Testing Environment**: Dedicated staging environment for testing
- [ ] **Gradual Rollout**: Feature flags for gradual deployment

## Success Criteria
- [ ] All views accessible under new country/curriculum structure
- [ ] Metadata loading working correctly
- [ ] No broken links or missing content
- [ ] Performance maintained or improved
- [ ] All tests passing
- [ ] Documentation complete and up-to-date
