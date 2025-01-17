# Yacht Management System

## Description
This Laravel-based application was created as a laboratory exercise at the faculty for the subject *Implementation of Free and Open Source Systems*. It is designed to manage private yachts, allowing users to browse available yachts, book trips, and leave reviews. The system includes CRUD operations for yachts, advanced management of reservations, and functionality to create and display reviews.

## Key Features
- **Yacht Management:**
  - List all yachts with search and filtering by type (e.g., "super yacht" or "classic").
  - Add new yachts with validations (e.g., type, capacity, hourly rate).
  - Update yacht details.
  - Delete yachts, with automatic removal of associated reservations and reviews.

- **Reservation Management:**
  - Book trips for yachts with valid details and automatic status assignment to "pending."
  - Update reservation status (e.g., "confirmed" or "cancelled").
  - List and filter reservations by status with detailed information.

- **Review Management:**
  - Create reviews for confirmed reservations.
  - Display reviews with filtering by status and include yacht and reservation details.

- **Validation:**
  - Enforce data integrity for yachts, reservations, and reviews.
  - Automatically manage cascading deletions of reservations and reviews.

- **Observer Pattern:**
  - Automatically delete associated reservations and reviews when a yacht is removed.
  - Default status "pending" for new reservations and reviews.

- **Factory Support:**
  - Generate sample data for yachts, reservations, and reviews for testing purposes.

## Database Schema
### Yachts Table:
- **id**: Unique identifier.
- **name**: Yacht name.
- **type**: Yacht type ("super yacht" or "classic").
- **capacity**: Maximum capacity.
- **hourly_rate**: Hourly rate for booking.
- **created_at, updated_at**: Timestamps.

### Reservations Table:
- **id**: Unique identifier.
- **yacht_id**: Associated yacht.
- **user_name**: User's name.
- **reservation_date**: Date of reservation.
- **duration_hours**: Duration in hours.
- **status**: Status ("pending," "confirmed," "cancelled").
- **created_at, updated_at**: Timestamps.

### Reviews Table:
- **id**: Unique identifier.
- **reservation_id**: Associated reservation.
- **reviewer_name**: Name of the reviewer.
- **text**: Review text.
- **rating**: Rating (1-5).
- **status**: Status ("pending," "approved," "declined").
- **created_at, updated_at**: Timestamps.
