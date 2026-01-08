# Model/Factory/Seeder Audit

Generated: 2025-08-22 16:29

## Coverage
| Model | Factory | Seeded |
|---|---|---|
| Import | yes | no |
| JobManager | yes | no |
| Schedule | yes | no |
| Frequency | yes | no |
| JobsWaiting | yes | no |
| FailedJob | yes | no |
| Result | yes | no |
| JobBatch | yes | no |
| FailedImportRow | yes | no |
| Parameter | yes | no |
| ScheduleHistory | yes | no |
| Task | yes | no |
| Job | yes | no |
| Export | yes | no |
| FrontendSortable | n/a | n/a |

Seeder: `database/seeders/JobDatabaseSeeder.php`

## Missing / Actions
- Add exemplar seeding for: Job, Schedule, Task, Frequency, Parameter.
- `FrontendSortable`: utility; exclude from factory/seeding.

## Likely non-business-critical
- `FrontendSortable` (UX helper); infra-only.
