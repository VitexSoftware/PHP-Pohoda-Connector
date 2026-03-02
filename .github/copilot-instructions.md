---
description: PHP-Pohoda-Connector - PHP library for Pohoda accounting system integration
applyTo: '**'
---

# PHP-Pohoda-Connector - Copilot Instructions

## Project Overview
PHP-Pohoda-Connector is a **PHP library** for integrating with Pohoda accounting system:
- **XML API Client**: Handles Pohoda mServer XML communication
- **Data Serialization**: Converts PHP objects to/from Pohoda XML format
- **Connection Management**: Manages authentication and session handling
- **Type Safety**: Full PHP 8.4+ type system integration
- **Error Handling**: Comprehensive exception management

## 📋 Development Standards

### Core Coding Guidelines
- **PHP 8.4+**: Use modern PHP features and strict types: `declare(strict_types=1);`
- **PSR-12**: Follow PHP-FIG coding standards for consistency
- **Type Safety**: Include type hints for all parameters and return types
- **Documentation**: PHPDoc blocks for all public methods and classes
- **Testing**: PHPUnit tests for all new functionality
- **Internationalization**: Use `_()` functions for translatable strings

### Code Quality Requirements
- **Syntax Validation**: After every PHP file edit, run `php -l filename.php` for syntax checking
- **Error Handling**: Implement comprehensive try-catch blocks with meaningful error messages
- **Testing**: Create/update PHPUnit test files for all new/modified classes
- **Performance**: Optimize for production use with large datasets
- **Security**: Ensure code doesn't expose sensitive information

### Development Best Practices
- **Code Comments**: Write in English using complete sentences and proper grammar
- **Variable Names**: Use meaningful names that describe their purpose
- **Constants**: Avoid magic numbers/strings; define constants instead
- **Exception Handling**: Always provide meaningful error messages
- **Commit Messages**: Use imperative mood and keep them concise
- **Security**: Ensure code is secure and doesn't expose sensitive information
- **Compatibility**: Maintain compatibility with latest PHP and library versions
- **Maintainability**: Follow best practices for maintainable code

### Testing Requirements
- **PHPUnit Integration**: All new classes require corresponding test files
- **Test Coverage**: Aim for comprehensive test coverage of all functionality
- **Mock Usage**: Use mocks for external dependencies during testing
- **Test Structure**: Follow PSR-12 coding standards in test files

### XML/API Integration Guidelines
- **XML Validation**: Validate all XML input/output against Pohoda schemas
- **Connection Security**: Use secure authentication methods
- **Error Recovery**: Implement retry logic for network failures
- **Data Integrity**: Ensure data consistency in XML transformations

⚠️ **Important Notes for Copilot:**
- This is a foundational library used by other VitexSoftware projects
- Maintain backward compatibility when making changes
- Follow Pohoda XML schema requirements strictly
- Prioritize stability and reliability over new features
- All changes must be thoroughly tested with real Pohoda systems
