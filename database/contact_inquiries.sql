-- Run once to create the contact inquiries table.
CREATE TABLE IF NOT EXISTS contact_inquiries (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(120) NOT NULL,
  email VARCHAR(180) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  message TEXT NOT NULL,
  service_type VARCHAR(32) NOT NULL DEFAULT 'general',
  package_slug VARCHAR(120) NULL,
  page_url VARCHAR(255) NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  INDEX idx_service_type (service_type),
  INDEX idx_created_at (created_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- If the table already exists from an older migration, run:
-- ALTER TABLE contact_inquiries
--   ADD COLUMN package_slug VARCHAR(120) NULL AFTER service_type,
--   ADD COLUMN page_url VARCHAR(255) NULL AFTER package_slug;
