(() => {
  const prefersReducedMotion = window.matchMedia?.("(prefers-reduced-motion: reduce)")?.matches ?? false;

  const setBodyScrollLock = (locked) => {
    document.documentElement.classList.toggle("is-scroll-locked", locked);
    document.body.classList.toggle("is-scroll-locked", locked);
  };

  // ----------------------------
  // PC: Mega menu (Services)
  // ----------------------------
  const megaTrigger = document.querySelector('[data-mega-trigger="services"]');
  const mega = document.querySelector('[data-mega="services"]');

  const setMegaOpen = (open) => {
    if (!megaTrigger || !mega) return;
    mega.classList.toggle("is-open", open);
    megaTrigger.setAttribute("aria-expanded", open ? "true" : "false");
  };

  if (megaTrigger && mega) {
    let hoverTimer = null;

    const openSoon = () => {
      window.clearTimeout(hoverTimer);
      hoverTimer = window.setTimeout(() => setMegaOpen(true), 50);
    };
    const closeSoon = () => {
      window.clearTimeout(hoverTimer);
      hoverTimer = window.setTimeout(() => setMegaOpen(false), 120);
    };

    // Click toggle (primary)
    megaTrigger.addEventListener("click", (e) => {
      e.preventDefault();
      const next = megaTrigger.getAttribute("aria-expanded") !== "true";
      setMegaOpen(next);
    });

    // Hover-friendly
    megaTrigger.addEventListener("mouseenter", openSoon);
    mega.addEventListener("mouseenter", openSoon);
    megaTrigger.addEventListener("mouseleave", closeSoon);
    mega.addEventListener("mouseleave", closeSoon);

    // Close on outside click
    document.addEventListener("click", (e) => {
      if (!mega.classList.contains("is-open")) return;
      const t = e.target;
      if (!(t instanceof Element)) return;
      if (mega.contains(t) || megaTrigger.contains(t)) return;
      setMegaOpen(false);
    });

    // Close on ESC
    document.addEventListener("keydown", (e) => {
      if (e.key !== "Escape") return;
      if (!mega.classList.contains("is-open")) return;
      setMegaOpen(false);
      megaTrigger.focus();
    });

    // Close after navigation
    mega.querySelectorAll("a").forEach((a) => {
      a.addEventListener("click", () => setMegaOpen(false));
    });
  }

  // ----------------------------
  // Mobile: Hamburger + accordion
  // ----------------------------
  const mobileTrigger = document.querySelector("[data-mobile-trigger]");
  const mobileNav = document.querySelector("[data-mobile-nav]");
  const mobileCloseEls = document.querySelectorAll("[data-mobile-close]");
  const mobileLinks = document.querySelectorAll("[data-mobile-link]");

  const setMobileOpen = (open) => {
    if (!mobileTrigger || !mobileNav) return;
    mobileNav.classList.toggle("is-open", open);
    mobileNav.setAttribute("aria-hidden", open ? "false" : "true");
    mobileTrigger.setAttribute("aria-expanded", open ? "true" : "false");
    mobileTrigger.setAttribute("aria-label", open ? "メニューを閉じる" : "メニューを開く");

    setBodyScrollLock(open);
  };

  if (mobileTrigger && mobileNav) {
    mobileTrigger.addEventListener("click", () => {
      const next = mobileTrigger.getAttribute("aria-expanded") !== "true";
      setMobileOpen(next);
    });

    mobileCloseEls.forEach((el) => el.addEventListener("click", () => setMobileOpen(false)));
    mobileLinks.forEach((el) => el.addEventListener("click", () => setMobileOpen(false)));

    document.addEventListener("keydown", (e) => {
      if (e.key !== "Escape") return;
      if (!mobileNav.classList.contains("is-open")) return;
      setMobileOpen(false);
      mobileTrigger.focus();
    });

    // Accordion (services)
    const accTrigger = mobileNav.querySelector("[data-accordion-trigger]");
    const accPanel = mobileNav.querySelector("[data-accordion-panel]");
    if (accTrigger && accPanel) {
      const setAccOpen = (open) => {
        accTrigger.setAttribute("aria-expanded", open ? "true" : "false");
        accPanel.classList.toggle("is-open", open);

        // Smooth slide: animate height explicitly
        const reduce = prefersReducedMotion;
        if (reduce) {
          accPanel.style.height = open ? "auto" : "0px";
          return;
        }

        if (open) {
          accPanel.style.height = "0px";
          accPanel.offsetHeight; // force reflow
          accPanel.style.height = `${accPanel.scrollHeight}px`;
        } else {
          accPanel.style.height = `${accPanel.scrollHeight}px`;
          accPanel.offsetHeight; // force reflow
          accPanel.style.height = "0px";
        }
      };

      // init closed
      accPanel.style.height = "0px";

      accTrigger.addEventListener("click", () => {
        const next = accTrigger.getAttribute("aria-expanded") !== "true";
        setAccOpen(next);
      });

      accPanel.addEventListener("transitionend", () => {
        const open = accTrigger.getAttribute("aria-expanded") === "true";
        if (open) accPanel.style.height = "auto";
      });
    }
  }

  // ----------------------------
  // Single: Gallery lightbox
  // ----------------------------
  const lightbox = document.querySelector("[data-lightbox-modal]");
  const lightboxImage = lightbox?.querySelector("[data-lightbox-image]");
  const lightboxTriggers = document.querySelectorAll("[data-lightbox-trigger]");

  if (lightbox && lightboxImage && lightboxTriggers.length) {
    const lightboxCloseEls = lightbox.querySelectorAll("[data-lightbox-close]");
    let lastFocus = null;

    const setLightboxOpen = (open, src = "", alt = "") => {
      lightbox.classList.toggle("is-open", open);
      lightbox.hidden = !open;
      lightbox.setAttribute("aria-hidden", open ? "false" : "true");
      setBodyScrollLock(open);

      if (open) {
        lightboxImage.src = src;
        lightboxImage.alt = alt;
        lastFocus = document.activeElement;
        lightbox.querySelector(".lightbox__close")?.focus();
      } else {
        lightboxImage.removeAttribute("src");
        lightboxImage.alt = "";
        lastFocus?.focus?.();
        lastFocus = null;
      }
    };

    lightboxTriggers.forEach((trigger) => {
      trigger.addEventListener("click", () => {
        const img = trigger.querySelector("img");

const src =
    trigger.dataset.lightboxSrc ||
    img?.currentSrc ||
    img?.src ||
    "";
        if (!src) return;
        setLightboxOpen(true, src, img?.alt || "");
      });
    });

    lightboxCloseEls.forEach((el) => {
      el.addEventListener("click", () => setLightboxOpen(false));
    });

    document.addEventListener("keydown", (e) => {
      if (e.key !== "Escape") return;
      if (!lightbox.classList.contains("is-open")) return;
      setLightboxOpen(false);
    });
  }

  // ----------------------------
  // FAQ: Accordion
  // ----------------------------
  const qaTriggers = document.querySelectorAll("[data-qa-trigger]");

  qaTriggers.forEach((trigger) => {
    const panelId = trigger.getAttribute("aria-controls");
    const panel = panelId ? document.getElementById(panelId) : null;
    if (!panel) return;

    const setQaOpen = (open) => {
      trigger.setAttribute("aria-expanded", open ? "true" : "false");
      panel.setAttribute("aria-hidden", open ? "false" : "true");
      trigger.classList.toggle("is-open", open);

      if (prefersReducedMotion) {
        panel.style.height = open ? "auto" : "0px";
        return;
      }

      if (open) {
        panel.style.height = "0px";
        panel.offsetHeight;
        panel.style.height = `${panel.scrollHeight}px`;
      } else {
        panel.style.height = `${panel.scrollHeight}px`;
        panel.offsetHeight;
        panel.style.height = "0px";
      }
    };

    panel.style.height = "0px";

    trigger.addEventListener("click", () => {
      const next = trigger.getAttribute("aria-expanded") !== "true";
      setQaOpen(next);
    });

    panel.addEventListener("transitionend", () => {
      const open = trigger.getAttribute("aria-expanded") === "true";
      if (open) panel.style.height = "auto";
    });
  });
})();