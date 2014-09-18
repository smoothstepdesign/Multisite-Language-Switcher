---
layout: post
title: Version 1.0.1 is out
comments: true
---

Version 1.0.1 of the Multisite Language Switcher is now available!

This minor update has a fix for a small bug. The meta-box in the edit-view of (custom) posts does not include the auto-drafts anymore. This issue was introduced in version 1.0 because of calls to **get\_post\_stati** without any _$args_.