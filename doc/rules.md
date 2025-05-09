# 📚 Business Rules 

This document lists the business rules defined for the domain.

---

## Post business rules

### 1. A Post must have a **title** and **content**
- These fields are mandatory for publishing.
- They may be empty during draft, but must be validated before publishing.

---

### 2. A Post can be either **draft** or **published**
- A new Post starts in `draft` state.
- A Post can be published only if both the title and content are filled.
- When publishing:
  - Set `publishedAt` to the current datetime.
  - Update the post status from DRAFT to PUBLISHED

---

### Notes

- These rules must live inside the `Post` domain object (not in controllers or services).
- They must be **enforced via methods**, not exposed via direct property access.
- Domain Exceptions should be thrown when rules are violated.