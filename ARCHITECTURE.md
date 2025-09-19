# View Organization Architecture for Countries and Curriculums

## High-Level Architecture Overview

```
┌─────────────────────────────────────────────────────────────────────────────┐
│                            Laravel Application                              │
├─────────────────────────────────────────────────────────────────────────────┤
│  Routes (web.php)                    Controllers                          │
│  ├── /{country}/*                    ├── CountryMiddleware                │
│  ├── /{country}/curriculum/*         ├── CurriculumController             │
│  └── /{country}/curriculum/*/subject ├── SubjectController                │
│                                       └── LessonController                 │
├─────────────────────────────────────────────────────────────────────────────┤
│  View Composers & Services                                                 │
│  ├── CountryDataComposer            ├── MetadataService                   │
│  ├── CurriculumDataComposer         └── CacheService                      │
├─────────────────────────────────────────────────────────────────────────────┤
│  Views Directory Structure                                                 │
│  └── resources/views/                                                      │
│      ├── countries/                    # Country-specific views            │
│      ├── shared/                       # Shared components                 │
│      └── errors/                       # Error pages                       │
└─────────────────────────────────────────────────────────────────────────────┘
```

## Detailed Directory Structure

```
resources/views/
├── countries/
│   ├── br/                           # Britain (UK Curriculum)
│   │   ├── layouts/
│   │   │   ├── app.blade.php         # Main layout
│   │   │   └── curriculum.blade.php  # Curriculum layout
│   │   ├── curriculums/
│   │   │   ├── eyfs/                 # Early Years Foundation Stage
│   │   │   │   ├── y0/              # Reception Year
│   │   │   │   │   ├── subjects/
│   │   │   │   │   │   ├── maths/
│   │   │   │   │   │   │   ├── lessons/
│   │   │   │   │   │   │   │   ├── week1.blade.php
│   │   │   │   │   │   │   │   ├── week2.blade.php
│   │   │   │   │   │   │   │   └── index.blade.php
│   │   │   │   │   │   │   └── overview.blade.php
│   │   │   │   │   │   └── english/
│   │   │   │   │   │       └── [similar structure]
│   │   │   │   │   └── index.blade.php
│   │   │   │   └── overview.blade.php
│   │   │   ├── ks1/                  # Key Stage 1
│   │   │   │   ├── y1/              # Year 1
│   │   │   │   │   └── subjects/
│   │   │   │   │       ├── maths/
│   │   │   │   │       └── english/
│   │   │   │   ├── y2/              # Year 2
│   │   │   │   │   └── subjects/
│   │   │   │   │       ├── maths/
│   │   │   │   │       └── english/
│   │   │   │   ├── index.blade.php
│   │   │   │   └── overview.blade.php
│   │   │   ├── ks2/                  # Key Stage 2
│   │   │   │   ├── y3/, y4/, y5/, y6/
│   │   │   │   └── subjects/[maths, english]
│   │   │   ├── ks3/                  # Key Stage 3
│   │   │   │   ├── y7/, y8/, y9/
│   │   │   │   └── subjects/[maths, english]
│   │   │   ├── ks4/                  # Key Stage 4
│   │   │   │   ├── y10/, y11/
│   │   │   │   └── subjects/[maths, english]
│   │   │   └── ks5/                  # Key Stage 5
│   │   │       ├── y12/, y13/
│   │   │       └── subjects/[maths, english]
│   │   ├── shared/
│   │   │   ├── components/
│   │   │   │   ├── lesson-card.blade.php
│   │   │   │   ├── progress-indicator.blade.php
│   │   │   │   └── curriculum-nav.blade.php
│   │   │   └── templates/
│   │   │       ├── lesson-template.blade.php
│   │   │       └── subject-template.blade.php
│   │   └── metadata/
│   │       ├── lessons.json
│   │       └── curriculum-config.json
│   └── ng/                           # Nigeria
│       ├── layouts/
│       │   ├── app.blade.php
│       │   └── curriculum.blade.php
│       ├── curriculums/
│       │   ├── english/
│       │   │   ├── primary-1/ through primary-6/
│       │   │   ├── jss-1/, jss-2/, jss-3/
│       │   │   └── sss-1/, sss-2/, sss-3/
│       │   ├── maths/
│       │   │   └── [year-specific folders]
│       │   ├── government/
│       │   │   └── [year-specific folders]
│       │   ├── it/
│       │   │   └── [year-specific folders]
│       │   └── literature-in-english/
│       │       └── [year-specific folders]
│       ├── shared/
│       │   ├── components/
│       │   └── templates/
│       └── metadata/
│           ├── lessons.json
│           └── curriculum-config.json
├── shared/
│   ├── layouts/
│   │   ├── app.blade.php            # Fallback layout
│   │   └── curriculum.blade.php     # Fallback curriculum layout
│   ├── partials/
│   │   ├── header.blade.php
│   │   ├── footer.blade.php
│   │   ├── breadcrumb.blade.php
│   │   └── side-nav.blade.php
│   ├── components/
│   │   ├── lesson-card.blade.php
│   │   ├── subject-overview.blade.php
│   │   ├── curriculum-selector.blade.php
│   │   └── progress-tracker.blade.php
│   └── templates/
│       ├── base-lesson.blade.php
│       └── base-subject.blade.php
└── errors/
    ├── 404.blade.php
    └── 500.blade.php
```

## Data Flow Architecture

```
┌─────────────────┐    ┌──────────────────┐    ┌─────────────────┐
│   User Request  │───▶│   Route Handler  │───▶│   Controller    │
│                 │    │                  │    │                 │
│ /{br}/ks1/y1    │    │ web.php          │    │ CurriculumCtrl  │
└─────────────────┘    └──────────────────┘    └─────────────────┘
                                                        │
                                                        ▼
┌─────────────────┐    ┌──────────────────┐    ┌─────────────────┐
│ View Composer   │───▶│ Metadata Service │───▶│   Cache Layer   │
│                 │    │                  │    │                 │
│ Injects data    │    │ Load JSON        │    │ Redis/File      │
└─────────────────┘    └──────────────────┘    └─────────────────┘
                                                        │
                                                        ▼
┌─────────────────┐    ┌──────────────────┐    ┌─────────────────┐
│   Blade View    │───▶│ Template Engine  │───▶│   HTML Output   │
│                 │    │                  │    │                 │
│ Render content  │    │ Process @extends │    │ Final response  │
└─────────────────┘    └──────────────────┘    └─────────────────┘
```

## Component Architecture

```
┌─────────────────────────────────────────────────────────────┐
│                    Component Hierarchy                      │
├─────────────────────────────────────────────────────────────┤
│  Layout Components (Top Level)                              │
│  ├── countries/{country}/layouts/app.blade.php              │
│  ├── countries/{country}/layouts/curriculum.blade.php       │
│  └── shared/layouts/*                                       │
├─────────────────────────────────────────────────────────────┤
│  Page Components (Mid Level)                                 │
│  ├── Curriculum Overview Pages                              │
│  ├── Subject Overview Pages                                 │
│  └── Lesson Detail Pages                                    │
├─────────────────────────────────────────────────────────────┤
│  UI Components (Low Level)                                   │
│  ├── lesson-card.blade.php                                  │
│  ├── progress-indicator.blade.php                           │
│  ├── curriculum-nav.blade.php                               │
│  └── subject-overview.blade.php                             │
└─────────────────────────────────────────────────────────────┘
```

## Metadata Structure Architecture

```json
{
  "country": "br",
  "curriculum": "ks1",
  "version": "1.0.0",
  "last_updated": "2024-01-15",
  "subjects": [
    {
      "code": "english",
      "name": "English",
      "levels": ["y1", "y2"],
      "terms": ["autumn", "spring", "summer"],
      "total_lessons": 24,
      "difficulty_distribution": {
        "beginner": 12,
        "intermediate": 8,
        "advanced": 4
      },
      "learning_objectives": [
        "Reading comprehension",
        "Writing skills",
        "Grammar basics"
      ]
    }
  ],
  "lessons": [
    {
      "id": "eng-ks1-y1-autumn-w1",
      "title": "Reading Comprehension Basics",
      "subject": "english",
      "year": "y1",
      "term": "autumn",
      "week": 1,
      "difficulty": "beginner",
      "estimated_time": 45,
      "objectives": [
        "Identify main ideas in simple texts",
        "Answer basic comprehension questions"
      ],
      "resources": [
        "worksheet.pdf",
        "audio-recording.mp3",
        "video-tutorial.mp4"
      ],
      "prerequisites": [],
      "next_lessons": ["eng-ks1-y1-autumn-w2"],
      "view_path": "countries.br.curriculums.ks1.subjects.english.lessons.week1"
    }
  ]
}
```

## Routing Architecture

```
┌─────────────────────────────────────────────────────────────┐
│                     Route Structure                        │
├─────────────────────────────────────────────────────────────┤
│  Base Routes                                                │
│  ├── GET  /                    → WelcomeController@index    │
│  ├── GET  /{country}           → CountryController@show     │
│  └── POST /{country}/switch    → CountryController@switch   │
├─────────────────────────────────────────────────────────────┤
│  Curriculum Routes                                          │
│  ├── GET  /{country}/curriculum                             │
│  │      → CurriculumController@index                        │
│  ├── GET  /{country}/curriculum/{curriculum}                │
│  │      → CurriculumController@show                         │
│  └── GET  /{country}/curriculum/{curriculum}/overview       │
│         → CurriculumController@overview                     │
├─────────────────────────────────────────────────────────────┤
│  Subject Routes                                             │
│  ├── GET  /{country}/curriculum/{curriculum}/subjects       │
│  │      → SubjectController@index                           │
│  ├── GET  /{country}/curriculum/{curriculum}/subjects/{subj}│
│  │      → SubjectController@show                            │
│  └── GET  /{country}/curriculum/{curriculum}/subjects/{subj}│
│         /overview → SubjectController@overview              │
├─────────────────────────────────────────────────────────────┤
│  Lesson Routes                                              │
│  ├── GET  /{country}/curriculum/{curriculum}/subjects/{subj}│
│  │      /lessons → LessonController@index                   │
│  ├── GET  /{country}/curriculum/{curriculum}/subjects/{subj}│
│  │      /lessons/{lesson} → LessonController@show           │
│  └── GET  /{country}/curriculum/{curriculum}/subjects/{subj}│
│         /lessons/{lesson}/resources → LessonController@res. │
└─────────────────────────────────────────────────────────────┘
```

## Caching Strategy Architecture

```
┌─────────────────────────────────────────────────────────────┐
│                  Caching Layers                           │
├─────────────────────────────────────────────────────────────┤
│  Application Cache (Redis/File)                            │
│  ├── metadata:{country}:{curriculum} → JSON data          │
│  ├── views:{country}:{curriculum}:{subject} → Compiled    │
│  └── user:{user_id}:progress → Progress data               │
├─────────────────────────────────────────────────────────────┤
│  View Cache (Laravel)                                       │
│  ├── Compiled Blade templates                              │
│  └── Component caches                                      │
├─────────────────────────────────────────────────────────────┤
│  CDN Cache (Optional)                                       │
│  ├── Static assets (CSS, JS, images)                       │
│  └── Public curriculum resources                           │
└─────────────────────────────────────────────────────────────┘
```

## Benefits of This Architecture

- **Scalability**: Easy to add new countries and curriculums
- **Maintainability**: Clear separation of concerns
- **Performance**: Efficient caching and lazy loading
- **Flexibility**: Country-specific customizations
- **SEO-Friendly**: Clean, hierarchical URLs
- **Developer Experience**: Intuitive file organization

This architecture provides a solid foundation for managing educational content across multiple countries and curriculums while maintaining clean, maintainable code.
