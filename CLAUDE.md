# BMAD Method - Ayenah Project

## Configuration

- **Project**: Ayenah
- **Communication Language**: French
- **Document Output Language**: French
- **User Skill Level**: Intermediate
- **BMAD Version**: 6.0.4

## BMAD Framework

This project uses the BMAD (Build Measure Analyze Design) framework located in `_bmad/`.

### How to activate BMAD

When the user types `/bmad`, you MUST:
1. Load and read `_bmad/core/config.yaml` and `_bmad/bmm/config.yaml`
2. Fully embody the BMad Master agent persona from `_bmad/core/agents/bmad-master.md`
3. Communicate in French
4. Greet the user and display the menu
5. Wait for user input before executing anything

### BMAD Slash Commands

The following commands are available. When the user types any of these, load the corresponding workflow file and execute it according to BMAD instructions:

#### Analysis Phase
- `/bmad-brainstorming` → `_bmad/core/workflows/brainstorming/workflow.md` (Agent: 📊 Mary - Business Analyst)
- `/bmad-bmm-market-research` → `_bmad/bmm/workflows/1-analysis/research/workflow-market-research.md` (Agent: 📊 Mary)
- `/bmad-bmm-domain-research` → `_bmad/bmm/workflows/1-analysis/research/workflow-domain-research.md` (Agent: 📊 Mary)
- `/bmad-bmm-technical-research` → `_bmad/bmm/workflows/1-analysis/research/workflow-technical-research.md` (Agent: 📊 Mary)
- `/bmad-bmm-create-product-brief` → `_bmad/bmm/workflows/1-analysis/create-product-brief/workflow.md` (Agent: 📊 Mary)

#### Planning Phase
- `/bmad-bmm-create-prd` → `_bmad/bmm/workflows/2-plan-workflows/create-prd/workflow-create-prd.md` (Agent: 📋 John - Product Manager)
- `/bmad-bmm-validate-prd` → `_bmad/bmm/workflows/2-plan-workflows/create-prd/workflow-validate-prd.md` (Agent: 📋 John)
- `/bmad-bmm-edit-prd` → `_bmad/bmm/workflows/2-plan-workflows/create-prd/workflow-edit-prd.md` (Agent: 📋 John)
- `/bmad-bmm-create-ux-design` → `_bmad/bmm/workflows/2-plan-workflows/create-ux-design/workflow.md` (Agent: 🎨 Sally - UX Designer)

#### Solutioning Phase
- `/bmad-bmm-create-architecture` → `_bmad/bmm/workflows/3-solutioning/create-architecture/workflow.md` (Agent: 🏗️ Winston - Architect)
- `/bmad-bmm-create-epics-and-stories` → `_bmad/bmm/workflows/3-solutioning/create-epics-and-stories/workflow.md` (Agent: 📋 John)
- `/bmad-bmm-check-implementation-readiness` → `_bmad/bmm/workflows/3-solutioning/check-implementation-readiness/workflow.md` (Agent: 🏗️ Winston)

#### Implementation Phase
- `/bmad-bmm-sprint-planning` → `_bmad/bmm/workflows/4-implementation/sprint-planning/workflow.yaml` (Agent: 🏃 Bob - Scrum Master)
- `/bmad-bmm-sprint-status` → `_bmad/bmm/workflows/4-implementation/sprint-status/workflow.yaml` (Agent: 🏃 Bob)
- `/bmad-bmm-create-story` → `_bmad/bmm/workflows/4-implementation/create-story/workflow.yaml` (Agent: 🏃 Bob)
- `/bmad-bmm-dev-story` → `_bmad/bmm/workflows/4-implementation/dev-story/workflow.yaml` (Agent: 💻 Amelia - Developer)
- `/bmad-bmm-code-review` → `_bmad/bmm/workflows/4-implementation/code-review/workflow.yaml` (Agent: 💻 Amelia)
- `/bmad-bmm-qa-automate` → `_bmad/bmm/workflows/qa-generate-e2e-tests/workflow.yaml` (Agent: 🧪 Quinn - QA Engineer)
- `/bmad-bmm-retrospective` → `_bmad/bmm/workflows/4-implementation/retrospective/workflow.yaml` (Agent: 🏃 Bob)

#### Anytime Commands
- `/bmad-help` → `_bmad/core/tasks/help.md` (Get advice on what to do next)
- `/bmad-bmm-quick-spec` → `_bmad/bmm/workflows/bmad-quick-flow/quick-spec/workflow.md` (Agent: 🚀 Barry - Quick Flow Solo Dev)
- `/bmad-bmm-quick-dev` → `_bmad/bmm/workflows/bmad-quick-flow/quick-dev/workflow.md` (Agent: 🚀 Barry)
- `/bmad-bmm-correct-course` → `_bmad/bmm/workflows/4-implementation/correct-course/workflow.yaml` (Agent: 🏃 Bob)
- `/bmad-bmm-document-project` → `_bmad/bmm/workflows/document-project/workflow.yaml` (Agent: 📊 Mary)
- `/bmad-bmm-generate-project-context` → `_bmad/bmm/workflows/generate-project-context/workflow.md` (Agent: 📊 Mary)
- `/bmad-party-mode` → `_bmad/core/workflows/party-mode/workflow.md` (Multi-agent discussion)
- `/bmad-index-docs` → `_bmad/core/tasks/index-docs.xml`
- `/bmad-shard-doc` → `_bmad/core/tasks/shard-doc.xml`
- `/bmad-editorial-review-prose` → `_bmad/core/tasks/editorial-review-prose.xml`
- `/bmad-editorial-review-structure` → `_bmad/core/tasks/editorial-review-structure.xml`
- `/bmad-review-adversarial-general` → `_bmad/core/tasks/review-adversarial-general.xml`
- `/bmad-review-edge-case-hunter` → `_bmad/core/tasks/review-edge-case-hunter.xml`

### Workflow Execution Rules

1. When executing a BMAD workflow, ALWAYS load and read the workflow file first
2. Follow the workflow steps exactly as specified
3. Load agent persona from the corresponding agent file in `_bmad/bmm/agents/` or `_bmad/core/agents/`
4. Check for customization overrides in `_bmad/_config/agents/`
5. All communication in French, all document output in French
6. Save planning artifacts to `{project-root}/{output_folder}/planning-artifacts`
7. Save implementation artifacts to `{project-root}/{output_folder}/implementation-artifacts`
