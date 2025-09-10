# Reusable Prompt: Implement Curriculum Content for Educational Website

## Task Description:

Implement curriculum content for [Year/Subject: year 6, Maths"] based on [source document "TODO.md" or "UK National Curriculum"], following the established template structure used in [reference year/subject, e.g., Year 7 Maths].

## Steps to Follow:

### 1. Analyze Requirements:

- Review the curriculum source document to understand the content structure, learning objectives, and termly breakdowns.
- Examine the reference template (e.g., Year 7 Maths) to understand the HTML structure, CSS styling, navigation patterns, and content variations.
- Identify appropriate color theme for the year (e.g., yellow for Year 1, orange for Year 5).

### 2. Create Core Files:

- Create `[subject].css` with CSS variables for color theme (e.g., `--color-year-[number]: [color]; --color-year-[number]-light: [lighter color];`).
- Create `plan.html` with curriculum overview, termly breakdowns, and weekly content summaries. Use inline CSS for consistency with reference template.
- Update `en-index.html` to include curriculum resources link and term navigation. Use inline CSS for main pages, linked CSS for consistency.

### 3. Implement Term Structure:

- Create `[term]/index.html` for each term (autumn, spring, summer) with weekly content links using absolute paths.
- For implemented terms, create active week links for the first week only; disable remaining weeks with `class="disabled"` on the `<li>` element to match reference template (e.g., only Week 1 active, Weeks 2-12 disabled).
- For future terms, use disabled links with appropriate styling.
- Create detailed `week[number].html` pages with:
  - Learning objectives and topic introduction
  - In-class activities with practical examples
  - Homework assignments in styled sections
  - Assessment details with question lists and download links
  - Resource links for Google Drive/Classroom access
  - Solution request sections for completed assessments

### 4. Content Enhancement:

- Include practical activities, assessment suggestions, and progression indicators based on curriculum guidelines.
- Add download links for worksheets, assessments, and resources (PDFs, Google Docs, etc.).
- Incorporate solution request sections and info boxes for additional guidance.
- Vary week page content depth based on curriculum needs (some weeks may have more detailed activities).

### 5. Ensure Consistency:

- Use absolute link paths throughout for reliable navigation (e.g., /year-round/KS1/y1/subjects/english/).
- Maintain consistent styling with the reference template (inline CSS for main pages, linked for sub-pages).
- Include appropriate back links and footer information with OA Tutors branding.
- Handle unimplemented content with disabled links and visual indicators.
- Ensure responsive design with mobile-friendly layouts.

### 6. Additional Resources:

- Include PDF assessment files in appropriate directories if available.
- Add links to external resources (Google Drive, Classroom) where applicable.
- Ensure all links are functional and point to correct locations.
- Use Poppins font from Google Fonts for consistent typography.

## Expected Output:

- Complete set of HTML files for the curriculum implementation.
- Consistent navigation and styling across all pages, matching the reference template.
- Content that accurately reflects the specified curriculum guidelines.
- Ready-to-use educational resources with downloadable materials.
- Scalable structure for future content additions and term implementations.

## Variables to Replace:

- `[Year/Subject]`: e.g., "Year 1 English", "Year 5 English", "Year 2 Maths"
- `[source document/curriculum guidelines]`: e.g., "TODO.md", "UK National Curriculum"
- `[reference year/subject]`: e.g., "Year 7 Maths", "Year 1 English"
- `[subject]`: e.g., "english", "maths"
- `[number]`: e.g., "1", "5"

## Responsive Title:

Additionally, ensured that the `<h1>` elements in all year group index pages (from Reception to Year 13) are responsive, scaling from 3rem on desktop down to 1.2rem on mobile devices (≤576px). Fixed an issue in the Reception index where an extra media query was overriding the scaling. The Year 1 English curriculum is now fully implemented and ready for content population in the week files.

---

This prompt can be reused by replacing the variables with specific details for different curriculum implementations.
